<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01 - Class</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="min-h-[100vh] flex justify-center items-center text-white/80">
    <main class="w-[380px] h-[600px] bg-black/70 rounded">
        <header class="flex 
                       gap-6 
                       justify-center 
                       items-center
                       border-b
                       border-dashed
                       pb-5">
            <a href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-blue-300 hover:-translate-x-3 transition-all">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </a>
            
            <h1 class="text-2xl">Class</h1>
        </header>
        <section class="max-h-[500px] overflow-y-auto m-4">

          <?php 
             class Vehicule{
              // Attribustes
              public $brand;
              public $refer;
              public $model;
              public $color;


              // Methods
              public function setAttributes($brand,$refer,$model,$color){

                $this->brand = $brand;
                $this->refer = $refer;
                $this->model = $model;
                $this->color = $color;

              }

              public function getAttributes(){
                return "<div class='m-4 p-4 border border-whithe/50 rounded-md'>
                        <p><strong>Brand: </strong>$this->brand</p>
                        <p><strong>Refer: </strong>$this->refer</p>
                        <p><strong>Model: </strong>$this->model</p>
                        <p><strong>Color: </strong>$this->color</p>
                        </div>";
                       
              }
          }
          //Create an Object
          $vehicule1 = new Vehicule;
          $vehicule1->setAttributes('Volkswagen ','Tiguan ','2023 ','spaceGray');
          echo $vehicule1->getAttributes();
          $vehicule2 = new Vehicule;
          $vehicule2->setAttributes('Toyota ','Prafo ','2022 ','white');
          echo $vehicule2->getAttributes();
          $vehicule3 = new Vehicule;
          $vehicule3->setAttributes('Renault ','Sandero ','2020 ','black');
          echo $vehicule3->getAttributes();
          $vehicule4 = new Vehicule;
          $vehicule4->setAttributes('s ','s ','s ','s');
          echo $vehicule4->getAttributes();
          //Access Attributes
          // echo $vehicule1->brand;
          // $vehicule1->brand = ' Toyota ';
          // echo $vehicule1->brand;
          // echo $vehicule1->refer;
          // echo $vehicule1->model;
          // echo $vehicule1->color;

          ?>

        </section>
    </main>
    <script src="js/tailwind-3.2.4.js"></script>
</body>
</html>