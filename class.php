class car {

  // properties 
  public $company_name;
  public $model;
  public $speed;
  public $producation_year;
  public $seat_numbers=4;
  
  // methods 
  
  function __construct($company_name,$model,$speed,$production_year){
   $this->company_name = $company_name;
   $this->model = $model;
   $this->speed = $speed;
      
    
  }
  function go_forward($gaz_amount){
    
  }
  
  function go_right($degree){
  
  }
  
  function go_left($degree){
  
  }
  
  function go_back($gaz_amount){
  
  }
  
  
}

$honda = new Car("honda","1986","260",4);

$honda->model = "2000";

echo $honda->model;

