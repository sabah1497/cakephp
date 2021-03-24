
<?= $this->Form->create(null, ['type'=> 'get']) ?>
<?= $this->Form->control('key',['label'=> 'Search', 'value'=>$this->request->getQuery('key')]) ?>
<?= $this->Form->submit() ?>
<?= $this->Form->end() ?>


<table class="table-light">
    <tr>
        <th scope="col">Username</th>
        <th scope="col">EC Number</th>
        <th scope="col">CAS Number</th>
        <th scope="col">Substance Name</th>
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
            <?php echo ($rows['SubstanceID']) ?>

        </td>


        <td>
            <?php echo ($rows['ECnumber']) ?>

        </td>


        <td>
            <?php echo ($rows['CASnumber']) ?>

        </td>



        <td>
            <?php echo ($rows['Substancename']) ?>

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
