<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>05 - Parameters</title>
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
            
            <h1 class="text-2xl">Parameters</h1>
        </header>
        <section class="max-h-[500px] overflow-y-auto m-4">
            <?php
            class Country{
                public $name;

                public function __construct($name){
                    $this->name = $name;
                }
            }
            class FifaWorldCup{
                private $country;
                private $year;
                private $winner;

                public function __construct($country,$year,$winner = 'Brazil'){
                    $this->country = $country;
                    $this->year = $year;
                    $this->winner = $winner;
                }

                public function showEvent(){
                    echo "<ul>
                                    <li class='p-2 py-4 rounded-md grid grid-cols-3 gap-2 border-[1px] '>
                                        <spam><strong>Country: </strong>$this->country</spam>
                                        <spam><strong>Year: </strong>$this->year</spam>
                                        <spam><strong>Winner: </strong>$this->winner</spam>
                                    </li>
                    
                    
                    
                    </ul>";
                }
            }

            $country1 = new Country("Italy");
            $worldcup1 = new FifaWorldCup($country1->name,1990,'Germany');
            $worldcup1->showEvent();

            $country2 = new Country("USA");
            $worldcup2 = new FifaWorldCup($country2->name,1994);
            $worldcup2->showEvent();
            
            $country3 = new Country("France");
            $worldcup3 = new FifaWorldCup($country3->name,1998,"France");
            $worldcup3->showEvent();
            ?>
           
        </section>
    </main>
    <script src="js/tailwind-3.2.4.js"></script>
</body>
</html>