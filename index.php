<?php 
    include_once 'views/header.php';
    $names = array('RasBanXclusive', 'TechCompanion', 'SoftRunner');

    $name = $names[mt_rand(0,2)]; 
?>

<div class="inner cover">
    <div class="pt30"></div>

    <h1 class="cover-heading">Generate your awesome logo.</h1>
    <div class="pt30"></div>

    <p class="lead">Simply edit text, add your own colours, fonts &amp; Instantly download it all for free.</p>
   
    <div class="row">
        <form class="form-inline" action="#">
            <div class="pb30">
                <div class="col-sm-10 col-xs-offset-1">
                    <div class="input-group">
                        <label for="logo-name">Logo Name: </label>
                        <input type="text" name="logo-name" class="form-control" placeholder="eg. <?php echo $name; ?>">
                    </div>
                </div>
            </div>
            <div class="pt30"></div>
            <div class="pt30 pb30">
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <label for="font">Font: </label><br>
                    <select  name="font" class="form-control" style="font-family:'FontAwesome', Arial;">
                        <?php include_once 'views/fonts.php'; ?>
                    </select>
                </div>
                <div class="col-md-3 col-sm-2 col-xs-6">
                    <label for="icon">Icon: </label><br>
                    <select id="icon" name="icon" class="form-control" style="font-family:'FontAwesome', Arial;">
                        <?php include_once 'views/icons.php'; ?>
                    </select>
                </div>

                <div class="col-md-2 col-sm-2 col-xs-4">
                    <div class="input-group">
                      <label for="base-color">Base Color: </label>
                      <input type="color" name="base-color" class="form-control">
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-4">
                    <div class="input-group">
                      <label for="secondary-color">Secondary Color: </label>
                      <input type="color" name="secondary-color" class="form-control">
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-4">
                    <div class="input-group">
                      <label for="icon-color">Icon Color: </label>
                      <input type="color" name="icon-color" class="form-control">
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="row">
        <div class="pt30 col-md-offset-4 col-sm-offset-3 col-xs-offset-1">
            <div id="logo-output">
                <p><?php echo $name; ?> <span id="icon-output"><i class="fa fa-paper-plane icon"></i></span></p>
            </div>
        </div>
    </div>

    <div class="row">
        <p class="lead">
            <button id="preview" type="button" class="btn btn-lg btn-max">Preview Logo <i class="fa fa-arrow-circle-right"></i></button>
            <form method="POST" enctype="multipart/form-data" action="download" id="downloader">
                <input type="hidden" name="img_val" id="img_val" value="" />
            </form>
        </p>
    </div>
</div>

<?php include_once 'views/footer.php'; ?>