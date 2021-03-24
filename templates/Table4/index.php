

<?= $this->Form->create(null, ['type'=> 'get']) ?>
<?= $this->Form->control('key',['label'=> 'Search', 'value'=>$this->request->getQuery('key')]) ?>
<?= $this->Form->submit() ?>
<?= $this->Form->end() ?>






<table class="table-light">
    <tr>
        <th scope="col">Substances</th>
        <th scope="col">Related Information</th>

    </tr>
    <?php
    foreach ($results as $rows):

        ?>
        <!--//        echo "<tr><td>".$rows->id."</td>";-->
        <!--//        echo "<td<".$row->SubstanceID."</td>";-->
        <!--        <td>-->
        <!--            --><?php //$rows->SubstanceID ?>
        <!--        </td>-->
        <tr>
            <td>
                <?php echo ($rows['Substances']) ?>

            </td>


            <td>
                <?php echo ($rows['RelatedInformation']) ?>

            </td>


        </tr>
        <!--//        echo "<td>".$row->email."</td>";-->
        <!---->
        <!---->
        <!--//      echo "<td><a href='".$this-<Url->build(["controller" => "Yordas","action" => "edit",$row->id])."'>Edit</a></td>";-->
        <!--//      echo "<td><a href='".$this->Url->build(["controller" => "Users","action" => "delete",$row->id])."'>Delete</a></td></tr>";-->

    <?php
    endforeach;
    ?>


</table>

