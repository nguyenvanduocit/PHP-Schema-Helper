
<form method="post">
<input name="name" style="width:100%;padding: 30px; text-align: center; background: #fcfcfc; box-sizing: border-box;font-size: 20px; font-weight: bold" autofocus>
</form>
<?php
if(isset($_POST['name'])) {
    $schema = getSchema(trim($_POST['name']) );
    generateClass($schema);
    echo "<div style='width:100%;padding: 30px; text-align: center; background: green; box-sizing: border-box;font-size: 20px; font-weight: bold'>Done</div>";
}

function getSchema($name){

    $schema = new stdClass();
    $schema->name =$name;
    $schema->url = "http://schema.org/" . $name;
    $schema->properties = array();
    $yql_base_url = "http://query.yahooapis.com/v1/public/yql";
    $yql_query = "select * from html where url=\"http://schema.org/" . $name . "\" AND xpath=\"//div[@id='mainContent']\"";
    $yql_query_url = $yql_base_url . "?q=" . urlencode($yql_query);
    $yql_query_url .= "&format=json";


    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $yql_query_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $content = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    $jsonObject = json_decode($content);
    $result = $jsonObject->query->results;
    if($jsonObject->query->count > 0) {

        if(is_array($result->div->table))
        {
            $result->div->table = $result->div->table[0];
        }

        if(is_array($result->div->table->tbody))
        {
            $result->div->table->tbody = $result->div->table->tbody[0];
        }
        $trs = $result->div->table->tbody->tr;
        if(!is_array($trs)){
            $trs = array($trs);
        }
        if($result->div->table->thead[1]->tr->th->p->a->content == $name) {
            foreach ($trs as $index => $tr) {
                $object = new stdClass();
                if (isset($tr->th)) {
                    $object->name = getPropName($tr->th);
                    $object->type = getPropType($tr->td);
                } else {
                    $object->name = getPropName($tr);
                    $object->type = getPropType($tr);
                }
                $schema->properties[] = $object;
            }
        }
        $schema->parent = getParrentClass($result->div->h1);
    }
    var_dump($schema);
    return $schema;
}
function getPropName($obj){
    return $obj->code->a->content;
}
function getPropType($obj){
    if(is_array($obj))
    {
        $obj = $obj[0];
    }
    $result = $obj->a->content;
    if(isset($obj->p) && isset($obj->p->a)){
        if(is_array($obj->p->a))
        {
            foreach($obj->p->a as $a){
                $result .= "," . $a->content;
            }
        }
        else {
            $result .= "," . $obj->p->a->content;
        }
    }
    return $result;
}
function getParrentClass($h1){
    if(!property_exists($h1,"span"))
    {
        $class="Base";
    }
    else {
        if (is_array($h1->a)) {
            $class = $h1->a[count($h1->a)-1]->content;
        } else {
            $class = $h1->a->content;
        }
    }
    return $class;

}
function generateClass($schema){
    $constructor = "\n\t".  'function __construct(){$this->namespace = "' . $schema->name . '";}' . "\n";
    $code = "<?php\nclass " . "Sch" . $schema->name . " extends Sch". $schema->parent  ."{";
    foreach( $schema->properties as $property ){
        $code .= "\n\tprotected $" . $property->name . "\t=\t'" . $property->type . "';";
    }
    $code .= $constructor;
    $code .= "}";
    file_put_contents("Sch" . $schema->name . ".php",$code);
}