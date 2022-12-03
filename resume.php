<!DOCTYPE html>
<html>
<body>

<?php
    $name = 'Игорь';
    $city = 'СПб, Россия';
    $profi = 'Программист';
    $email = 'email@gmail.com';
    $phone = '8(981)0000000';
    $age = 38;    
?>

<!DOCTYPE html>
<html>
<head>
	<title>Мое резюме</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" 
          rel="stylesheet">
	<link rel="stylesheet" 
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		html,body,h1,h2,h3,h4,h5,h6 {font-family: 'Jost', sans-serif;}
	</style>
</head>

<body class="w3-light-grey">

	<div class="w3-content w3-margin-top" style="max-width:1400px;">

		<div class="w3-row-padding">

			<div class="w3-third">

				<div class="w3-white w3-text-grey w3-card-4">

					<div class="w3-display-container">

					    <img src="https://gbcdn.mrgcdn.ru/uploads/avatar/4751642/attachment/thumb-e426742115a1ca34686a600bac273f09.png" 
                             style="width:100%" alt="Avatar">

						<div class="w3-display-bottomleft w3-container w3-text-black">
							<h2><?php echo $name; ?></h2>
						</div>
					</div>

					<div class="w3-container">

						<p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>
                            <?php echo $profi; ?>
                        </p>                        
                        <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>
                            <?php echo $city ?>
                        </p>                        
                        <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>
                            <?php echo $email ?>
                        </p>                        
                        <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>
                            <?php echo $phone ?>
                        </p>                        
                        <p><i class="fa fa-hourglass-half fa-fw w3-margin-right w3-large w3-text-teal"></i>
                            <?php echo $age ?> лет
                        </p><hr>
                        
                        <p class="w3-large">
                            <b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b>
                        </p>
                        <?php 
                            $skills = [
                                'C#' => 70,
                                'Python' => 65,
                                'HTML' => 30,
                                'PHP' => 27,
                                'SQL' => 25
                            ];
                        ?>
                        <?php foreach($skills as $skillName => $skillValue): ?>
                            
                            <p><?php echo $skillName; ?></p>    

                            <div class="w3-light-grey w3-round-xlarge w3-small">

                                <div class="w3-container w3-round-xlarge w3-teal" 

                                    style="width:<?php echo $skillValue; ?>%">
                                    
                                    <?php echo $skillValue; ?>%
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <br>

                        <p class="w3-large w3-text-theme">
                            <b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b>
                        </p>
                        <?php 
                            $Languages = [
                                'Русский' => 100,
                                'Английский' => 50
                            ];
                        ?>
                        <?php foreach($Languages as $LangName => $LangValue): ?>
                            
                            <p><?php echo $LangName; ?></p>    

                            <div class="w3-light-grey w3-center w3-round-xlarge">

                                <div class="w3-round-xlarge w3-teal" 

                                    style="width:<?php echo $LangValue; ?>%">
                                    
                                    <?php echo $LangValue; ?>%
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <br>
                    </div>
                </div><br>
            </div>
            <div class="w3-twothird">

                <div class="w3-container w3-card w3-white w3-margin-bottom">

                    <h2 class="w3-text-grey w3-padding-16">

                        <i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>
                        
                        Опыт работы
                    </h2>                    
                    <?php 
                        $jobs = [
                            'Current' => ['Jan 2015', 'Current', 'I work very well'],
                            'Previous' => ['Mar 2012', 'Dec 2014', 'I work good'],
                            'Pre previous' => ['Jun 2010', 'Mar 2012', 'I work']
                        ];
                    ?>                    
                    <?php foreach($jobs as $jobName => $jobValues): ?>
                                                
                        <div class="w3-container">

                            <h5 class="w3-opacity"><b><?php echo $jobName; ?></b></h5>

                            <h6 class="w3-text-teal">

                                <i class="fa fa-calendar fa-fw w3-margin-right"></i>

                                <?php echo $jobValues[0]; ?> - <?php echo $jobValues[1]; ?>
                            </h6>
                            <p><?php echo $jobValues[2]; ?></p>
                            <hr>
                        </div>                        
                    <?php endforeach; ?>
                    <br>
                </div>
                
                <div class="w3-container w3-card w3-white">

                    <h2 class="w3-text-grey w3-padding-16">

                        <i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>

                        Образование
                    </h2>
                    <?php 
                        $educations = [
                            'GeekBrains' => ['Jun 2022', 'Current', 'I am learning very well'],
                            'University' => ['Sep 2005', 'Jun 2010', 'I am learning good'],
                            'School' => ['Se 1995', 'May 2005', 'I am learning']
                        ];
                    ?>                    
                    <?php foreach($educations as $educatName => $educatValues): ?>
                                                
                        <div class="w3-container">

                            <h5 class="w3-opacity"><b><?php echo $educatName; ?></b></h5>

                            <h6 class="w3-text-teal">

                                <i class="fa fa-calendar fa-fw w3-margin-right"></i>

                                <?php echo $educatValues[0]; ?> - <?php echo $educatValues[1]; ?>
                            </h6>
                            <p><?php echo $educatValues[2]; ?></p>
                            <hr>
                        </div>                        
                    <?php endforeach; ?>
                    <br>
                </div>
            </div>
        </div>
	</div>

	<footer class="w3-container w3-teal w3-center w3-margin-top">
		<p>Find me on social media.</p>
		<i class="fa fa-pinterest-p w3-hover-opacity"></i>
		<i class="fa fa-twitter w3-hover-opacity"></i>
		<i class="fa fa-linkedin w3-hover-opacity"></i>
	</footer>
</body>
</html>
