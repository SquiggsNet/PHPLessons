<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New PHP Page</title>
</head>
<body>

    <form id="calculate" name="calculate" action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post">
        <fieldset>
            <legend>Circle</legend>
            <label>Radius:
                <input name="radius" type="text" value="<?php echo $_POST['radius']; ?>"/>
            </label>
        </fieldset>
        <fieldset>
            <legend>Rectangle</legend>
            <label>Length:
                <input name="length" type="text" value="<?php echo $_POST['length']; ?>"/>
            </label>
            <label>Width:
                <input name="width" type="text" value="<?php echo $_POST['width']; ?>"/>
            </label>
        </fieldset>
        <fieldset>
            <legend>Triangle</legend>
            <label>Base:
                <input name="base" type="text" value="<?php echo $_POST['base']; ?>"/>
            </label>
            <label>Height:
                <input name="height" type="text" value="<?php echo $_POST['height']; ?>"/>
            </label>
        </fieldset>
        <input type="hidden" name="resize" value="100" />
        <input type="submit" name="submit" value="Calculate"/>
    </form>
    <?php
    require_once("circle.php");
    require_once("rectangle.php");
    require_once("triangle.php");

    if((!empty($_POST['radius']) && !empty($_POST['length']) && !empty($_POST['width']) && !empty($_POST['base'])&& !empty($_POST['height'])) || !empty($_POST['resize']))
    {
        $myRectangle = new rectangle("Rectangle", $_POST['length'], $_POST['width']);
        $myCircle = new circle("Circle", $_POST['radius']);
        $myTriangle = new triangle("Triangle", $_POST['base'], $_POST['height']);

        ?>
        <h3>Results</h3>
        <h2>Shape: <?php echo $myCircle->getName() ?></h2>
        <p>Area: <?php echo $myCircle->CalculateSize() ?></p>
        <h2>Shape: <?php echo $myRectangle->getName() ?></h2>
        <p>Area: <?php echo $myRectangle->CalculateSize() ?></p>
        <h2>Shape: <?php echo $myTriangle->getName() ?></h2>
        <p>Area: <?php echo $myTriangle->CalculateSize() ?></p>

        <form id="resize" name="resize" action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post">
            <fieldset>
                <legend>Resize</legend>
                <label>Enter Percent to resize by:
                    <input name="resize" type="text" value="<?php echo $_POST['resize']; ?>"/> &#37
                </label>
                <input type="hidden" name="base" value="<?php echo $_POST['base']; ?>" />
                <input type="hidden" name="height" value="<?php echo $_POST['height']; ?>" />
                <input type="hidden" name="radius" value="<?php echo $_POST['radius']; ?>" />
                <input type="hidden" name="length" value="<?php echo $_POST['length']; ?>" />
                <input type="hidden" name="width" value="<?php echo $_POST['width']; ?>" />
                <input type="submit" name="submit" value="Resize"/>
            </fieldset>
        </form>

        <?php

        if(!empty($_POST['resize'])){
            ?>

            <fieldset>
                <legend><?php echo $myCircle->getName() ?></legend>
                <p>New Area: <?php echo $myCircle->Resize($_POST['resize']) ?></p>
                <p>New Radius: <?php echo $myCircle->getRadius() ?></p>
            </fieldset>
<!--            <fieldset>-->
<!--                <legend>--><?php //echo $myRectangle->getName() ?><!--</legend>-->
<!--                <p>New Area: --><?php //echo $myRectangle->Resize($_POST['resize']) ?><!--</p>-->
<!--                <p>New length: --><?php //echo $myRectangle->getLength() ?><!--</p>-->
<!--                <p>New width: --><?php //echo $myRectangle->getWidth() ?><!--</p>-->
<!--            </fieldset>-->
            <fieldset>
                <legend><?php echo $myTriangle->getName() ?></legend>
                <p>New Area: <?php echo $myTriangle->Resize($_POST['resize']) ?></p>
                <p>New base: <?php echo $myTriangle->getBase() ?></p>
                <p>New height: <?php echo $myTriangle->getHeight() ?></p>
            </fieldset>


        <?php
        }

    }

    ?>

</body>
</html>