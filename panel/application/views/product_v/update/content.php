<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
             <?php echo "<b>$item->title</b> kaydını düzenliyorsunuz"; ?>
        </h4>
        <div class="widget">
           
            <hr class="widget-separator">
            <div class="widget-body">
             
                <form action="<?php echo base_url("product/update/$item->id"); ?>" method="post">
                    <div class="form-group">
                        <label>Başlık</label>
                        <input class="form-control"  placeholder="Başlık" name="title" value="<?php echo $item->title; ?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="input-form-error text-center"><?php echo form_error("title"); ?></small>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label>Açıklama</label>
                        <textarea name="description" class="m-0" data-plugin="summernote"  data-options="{height: 250}">
                            <?php echo $item->description; ?>
                        </textarea>
                    </div>
                   
                    <button type="submit" class="btn btn-primary btn-md btn-outline">Güncelle</button>
                    <a href="<?php echo base_url("product"); ?>" class="btn btn-md btn-outline btn-danger">İptal</a>
                </form>
            </div><!-- .widget-body -->
        </div>
    </div><!-- END column -->
  