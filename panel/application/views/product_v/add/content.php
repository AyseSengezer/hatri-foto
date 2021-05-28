<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Yeni ürün ekle
        </h4>
        <div class="widget">
           
            <hr class="widget-separator">
            <div class="widget-body">
             
                <form action="<?php echo base_url("product/save"); ?>" method="post">
                    <div class="form-group">
                        <label>Başlık</label>
                        <input class="form-control"  placeholder="Başlık" name="title">
                        <?php if(isset($form_error)){ ?>
                            <small class="input-form-error text-center"><?php echo form_error("title"); ?></small>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label>Açıklama</label>
                        <textarea name="description" class="m-0" data-plugin="summernote"  data-options="{height: 250}"></textarea>
                    </div>
                   
                    <button type="submit" class="btn btn-primary btn-md btn-outline">Kaydet</button>
                    <a href="<?php echo base_url("product"); ?>" class="btn btn-md btn-outline btn-danger">İptal</a>
                </form>
            </div><!-- .widget-body -->
        </div>
    </div><!-- END column -->
  