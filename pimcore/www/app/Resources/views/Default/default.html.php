<?php
/**
 * @var \Pimcore\Templating\PhpEngine $this
 * @var \Pimcore\Templating\PhpEngine $view
 * @var \Pimcore\Templating\GlobalVariables $app
 */

$this->extend('layout.html.php');
$debug=false;
?>


<?php if($this->editmode) { ?>
<style>
div.row
{
 border:2px dotted gray;    
 min-height: 30px;
}

div.cell
{
 border-left:2px dotted #222;    
}
table.band {
        width:100%;
        table-layout: fixed;
    }
</style>

<?php } ?>

    
    <?php while ($this->block("rows")->loop()) {
        

        $rowid=$this->block("rows")->getCurrent();
         ?>

<div class="row">

    <!-- ROW <?=$rowid?> -->



<?php $block = $this->block("cells2", ["manual" => true])->start(); ?>
<?php if($this->editmode) { ?><table class="band"> 
    <tr> <?php } ?>
        <?php while ($block->loop()) {

             $colid=$block->getCurrent();
             $count=$block->getCount();

             if($count==0) $count=12;

             $class=floor(12/$count);

             $extra=12-$class*($block->getCount());
             

             if($colid>=$block->getCount()-$extra-1)
             {
                $class=$class+1;
             }

  ?>
            <?php $block->blockConstruct(); ?>

            <?php if($this->editmode) { ?> <td> <?php } ?>
                    <?php $block->blockStart(); ?>
                  
            <div class="cell col-<?=$class ?>">       

<?=$this->areablock("content"); ?>
</div>

                    <?php $block->blockEnd(); ?>
                    <?php if($this->editmode) { ?> </td> <?php } ?>
            <?php $block->blockDestruct(); ?>
    
        <?php } ?>

        <?php if($this->editmode) { ?>   </tr>
</table>
<?php } ?>

<?php $block->end(); ?>

</div>
<?php } ?>