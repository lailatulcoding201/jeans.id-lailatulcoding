
    <div class="container main">
        <div class="single">
            <h4 class="page-title">customize</h4>
            <form class="form-horizontal customize-form" method="post" action="#">
                <div id="change-form">
                    <div id="fly" class="items">
                        <h4>Fly</h4><hr>
                        <div class="form-group">
                            <div class="col-sm-2">
                                <input type="radio" name="zipper" id="fly1">
                                <label for="fly1" class="col-sm-2">
                                    <img src="<?php echo base_url('images/'); ?>zip.jpg">
                                    <div class="item-name">
                                        Default
                                        <span class="selected pull-right glyphicon glyphicon-ok"></span>
                                    </div>
                                </label>
                            </div>
                            <div class="col-sm-2">
                                <input type="radio" name="zipper" id="fly2">
                                <label for="fly2" class="col-sm-2">
                                    <img src="<?php echo base_url('images/'); ?>zip.jpg">
                                    <div class="item-name">
                                        Default
                                        <span class="selected pull-right glyphicon glyphicon-ok"></span>
                                    </div>
                                </label>
                            </div>
                            <div class="col-sm-2">
                                <input type="radio" name="zipper" id="fly3">
                                <label for="fly3" class="col-sm-2">
                                    <img src="<?php echo base_url('images/'); ?>zip.jpg">
                                    <div class="item-name">
                                        Default
                                        <span class="selected pull-right glyphicon glyphicon-ok"></span>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div id="buttons" class="items">
                        <h4>BUTTONS</h4><hr>
                        <div class="form-group">
                            <div class="col-sm-2">
                                <input type="radio" name="button" id="button1">
                                <label for="button1" class="col-sm-2">
                                    <img src="<?php echo base_url('images/'); ?>zip.jpg">
                                    <div class="item-name">
                                        Default
                                        <span class="selected pull-right glyphicon glyphicon-ok"></span>
                                    </div>
                                </label>
                            </div>
                            <div class="col-sm-2">
                                <input type="radio" name="button" id="button2">
                                <label for="button2" class="col-sm-2">
                                    <img src="<?php echo base_url('images/'); ?>zip.jpg">
                                    <div class="item-name">
                                        Default
                                        <span class="selected pull-right glyphicon glyphicon-ok"></span>
                                    </div>
                                </label>
                            </div>
                            <div class="col-sm-2">
                                <input type="radio" name="button" id="button3">
                                <label for="button3" class="col-sm-2">
                                    <img src="<?php echo base_url('images/'); ?>zip.jpg">
                                    <div class="item-name">
                                        Default
                                        <span class="selected pull-right glyphicon glyphicon-ok"></span>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div id="pocket" class="items">
                        <h4>POCKET LINING FABRIC</h4><hr>
                        <div class="form-group">
                            <div class="col-sm-2">
                                <input type="radio" name="fly" id="pocket_lining_fabric1">
                                <label for="pocket_lining_fabric1" class="col-sm-2">
                                    <img src="<?php echo base_url('images/'); ?>zip.jpg">
                                    <div class="item-name">
                                        Default
                                        <span class="selected pull-right glyphicon glyphicon-ok"></span>
                                    </div>
                                </label>
                            </div>
                            <div class="col-sm-2">
                                <input type="radio" name="fly" id="pocket_lining_fabric2">
                                <label for="pocket_lining_fabric2" class="col-sm-2">
                                    <img src="<?php echo base_url('images/'); ?>zip.jpg">
                                    <div class="item-name">
                                        Default
                                        <span class="selected pull-right glyphicon glyphicon-ok"></span>
                                    </div>
                                </label>
                            </div>
                            <div class="col-sm-2">
                                <input type="radio" name="fly" id="pocket_lining_fabric3">
                                <label for="pocket_lining_fabric3" class="col-sm-2">
                                    <img src="<?php echo base_url('images/'); ?>zip.jpg">
                                    <div class="item-name">
                                        Default
                                        <span class="selected pull-right glyphicon glyphicon-ok"></span>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-nav">
                    <div><span id="counter">1</span> of 8</div>
                    <button type="button" id="prev" class="btn btn-info act">Previous</button>
                    <button type="button" id="next" class="btn btn-def act">Next</button>
                    <button type="submit" id="subm" class="btn btn-primary act">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <div id="footer" class="container-fluid">
        <div class="row">
            <div class="col-sm-4 footer-content">
                <h4>this is a footer</h4>
                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            <div class="col-sm-4 footer-content">
                <h4>this is a footer</h4>
                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            <div class="col-sm-4 footer-content">
                <h4>this is a footer</h4>
                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var count = 1;
        $(document).ready(function(){
            counter = $("#counter");
            $("#next").click(function(){
                count++;
                if(count>1){
                    $("#prev").css("display", "inline");
                }
                counter.html(count);
                if(count==8){
                    $("#subm").css("display","inline");
                    $(this).css("display","none");
                }
                changeform();
            });
            $("#prev").click(function(){
                count--;
                $("#subm").css("display","none");
                if(count<2){
                    $(this).css("display", "none");
                }
                if(count<8){
                    $("#next").css("display","inline");
                }
                counter.html(count);
                changeform();
            });

            function changeform(){
                $(".items").hide();
                if(count==1){
                    $("#fly").show();
                }else if(count==2){
                    $("#buttons").show();
                }else if(count==3){
                    $("#pocket").show();
                }
            }
        });

    </script>

</body>
</html>
