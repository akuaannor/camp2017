<link href="css/image.css" rel="stylesheet">
<div id="picModal" class="modal fade col-md-12" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-headers" style="background-color:#8cc152; color: #fff;">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <center style="border-bottom: 1px solid #e6ecf0;border-radius: 6px 6px 0 0;cursor: move;padding-top: 12px;padding-bottom: 12px;"><h5>PICTURE</h5></center>
      </div>
      <div class="modal-body">
      <h2 class="heading text-center" style="color: #66757f;font-size: 21px;font-weight: 300;line-height: 28px;margin: 20px;">UPLOAD,CROP AND SAVE PICTURE</h2>

                    <div class="box-2 pull-left">
                        <div class="result" style="margin-bottom:10px;"></div>
                    </div>
                    <div class="box-2 img-result hide pull-right">
                        <!-- result of crop -->
                        <img class="cropped" src="" alt="">
                    </div>
                        <!-- input file -->
                    <div class="box">
                        <input type="file" id="file-input" name="image">
                    </div>

                    <!-- input file -->
                    <div class="box">
                        <div class="options hide">
                        <label> Width</label>
                        <input type="number" class="img-w" value="300" min="100" max="1200" />
                    </div>
                        <!-- save btn -->
                        <button class="btn save hide">Save</button>
                        <!-- download btn -->
                        <a href="" class="btn download hide">Download</a>
                    </div>


             </div>
      <div class="modal-footer" style="background-color:#8cc152; color: #fff;border-bottom: 1px solid #84292c;cursor: move;padding-top: 12px;padding-bottom: 12px; padding-right: 47px; margin-top: 40px;"> <p>ICGC Holy Ghost Temple</p>
      </div>
  </div>
  </div>
</div>
<script src="js/image.js"></script>