<?php

include 'inc/header.php'; ?>
   
   <?php
   $feedback = 
   [
    [
      'id'=> '1',
      'name' => 'Jonnel Ceazer',
      'email' => 'Jonnel@email.com',
      'body'=> 'Data Structures and Algorithms'
          ],
          [
            'id'=> '2',
            'name' => 'Jacuzi Mapozi',
            'email' => 'Jacuzi@email.com',
            'body'=> 'Fundamentals of Data Science'
          ],
          [
            'id'=> '1',
            'name' => 'Typescript',
            'email' => 'type@email.com',
            'body'=> 'Typescript and Javascript'
          ]
    ];

   ?>
    <h2> Past Feedback</h2>
    <?php
      if(empty($feedback)):
    ?>
        <p class="lead mt-3">There are no past feedback.</p>
    <?php endif; ?>




    <?php 
    foreach($feedback  as $item): ?>
    <div class="card my-3 w-75">
     <div class="card-body text-center">
      <?php echo $item['body']; ?>
      <div class="text-secondary mt-2">
        By <?php echo $item['name'];?>
      </div>
     </div>
   </div>
   <?php endforeach; ?>

  
   <?php include 'inc/footer.php'; ?>

