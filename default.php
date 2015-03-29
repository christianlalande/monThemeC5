<?php $this->inc('elements/header.php'); ?>



  <!--  
    <div id="slider_fond"> 
            </div>
        <div id="diapo">
        <div class="row">
            <div class="w-12">
                <?php
                $a = new Area('contenu');
                $a->display($c);
                ?>
           </div>
            </div>
        <p class="clear"></p> 
        </div>
--> 
 
<div id="slider_fond">
        <div class="row">
            <div class="w-12">
                <div id="diapo">
                    <?php
                $a = new Area('contenu');
                $a->display($c);
                ?>
                </div>
            </div>
            <p class="clear"></p>        
        </div>
</div>
           
 
        
   

        <div class="row">
            <div class="w-12">
                        
            </div>
          <p class="clear"></p>
        </div>               
    
    
<?php $this->inc('elements/footer.php'); ?>