<?php
$title = "Update Product";
include('header.php');
require_once('../model/forignmodel.php');
$id = $_GET["id"];
$data =  getproductByID($id);




?>
<td>
    <h1 id="h1">Accept/Reject Forigen Product </h1>
    <fieldset>
        <form action='../controller/forigencheck.php' method='post' onsubmit="return validateform()">
            <script type="text/javascript" src="accept.js"></script>
            <table width='100%'>
                <form action='' method=''>
                    <table>

                        <tr>
                            <td>
                                ID:
                            </td>
                            <td>
                                <input type="text" name='ProductID' value=" <?php echo $data['Id'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Product Name:
                            </td>
                            <td>
                                <input type="text" name='ProductName' value=" <?php echo $data['Name'] ?> " id='pname' onblur="productNameValidation()">
                                <span id="spname" style="color:red"> </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Category:
                            </td>
                            <td>
                                <input type="text" name=' Category' value="<?php echo $data['Category'] ?> " id="ptype" onblur=" ProductTypeValidate()">
                                <span id="sptype" style="color:red"> </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Action:
                            </td>
                            <td>
                                <input type="text" name='Action' value="<?php echo $data['Action'] ?>" id='Mannufacture' onblur="MannufactureValidate()">
                                <span id="sMannufacture" style="color:red"> </span>
                            </td>
                        </tr>

                        <td colspan="2">
                            <input type='submit' name='submit ' value='submit' onclick="productNameValidation();QuantityValidate();BuypriceValidate();SellpriceValidate();">
                            <input type='Reset' value='Reset'>
                        </td>
                        </tr>
                    </table>
                </form>
            </table>
        </form>
    </fieldset>
</td>
</tr>
</table>
<fieldset>






    <?php
    include('footer.php');
    ?>