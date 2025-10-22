<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">  
      
      <b class="text-success" id="success-message"></b>
  
      <form action="#" id="form-data" class="mt-3">
        <div class="row">
          <div class="col-md-6">

            <div class="form-group">
              <div class="mb-3">
                <label for="title_category">Title Category</label>
                <input type="text" class="form-control" id="title_category" name="title_category"
                  value="<?= $data->title_category ?? null ?>">
                <b class="text-danger" id="title_category_error"></b>
              </div>
            </div>
            
            <div class="form-group">
              <div class="mb-3">
                <label for="subtitle_category">Subtitle Category</label>
                <input type="text" class="form-control" id="subtitle_category" name="subtitle_category"
                  value="<?= $data->subtitle_category ?? null ?>">
                <b class="text-danger" id="subtitle_category_error"></b>
              </div>
            </div>


            <div class="form-group">
              <div class="mb-3">
                <label for="title">Title</label>

                <?php if (!empty($id)) : ?>
                  <input type="hidden" name="id" value="<?= $id ?>">
                <?php endif; ?>

                <input type="hidden" name="slug" value="<?= $slug ?>" id="slug">

                <input type="text" class="form-control" id="title" name="title"
                  value="<?= $data->title ?? null ?>">
                <b class="text-danger" id="title_error"></b>
              </div>
            </div>

            <div class="form-group">
              <div class="mb-3">
                <label for="level">Product</label>
                <select name="product_id" id="product_id" class="form-control" multiple>
                  <?php if (isset($data->p_name)) : ?>
                    <option value="<?= $data->product_id ?>" selected><?= $data->p_name ?></option>
                  <?php endif ?>
                </select>
                <b class="text-danger" id="product_id_error"></b>
              </div>
            </div>

            <div class="form-group">
              <div class="mb-3">
                <label for="images">Image</label>
                <input type="file" class="multi form-control" name="images[]" multiple="multiple">
                <input type="hidden" class="multi form-control" name="image_name" value=<?= $data->images ?? '' ?>>
                <b class="text-danger" id="images_error"></b>
                
                <ul id="file-list"></ul>

              </div>
            </div>

            <?php if (isset($data->images)) : ?>
            <div class="form-group">
              <div class="mb-3 row">
                <div class="col-md-6">
                  <img src="<?= base_url("uploads/images/product_image/$data->images") ?>" 
                    alt="<?= $data->images ?>"
                    width="300"
                    height="150">
                </div>
              </div>
            </div>
            <?php endif; ?>
          </div>

          <div class="form-group">
            <div class="mb-3 row">
              <div class="col-md-6">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description"
                  value="<?= $data->description ?? null ?>">
                <b class="text-danger" id="description_error"></b>
              </div>
          </div>

          <div class="form-group">
            <div class="mb-3 row">
              <div class="col-md-6">
                <label for="position">Position</label>
                
                <select name="position" class="form-control">
                  <option value="">-Pilih-</option>
                  <option value="left" <?= isset($data->position) && $data->position == 'left' ? 'selected' : '' ?>>left</option>
                  <option value="right" <?= isset($data->position) && $data->position == 'right' ? 'selected' : '' ?>>right</option>
                  <option value="center" <?= isset($data->position) && $data->position == 'center' ? 'selected' : '' ?>>center</option>
                </select>
                <b class="text-danger" id="position_error"></b>
              </div>
          </div>

          <div class="form-group">
            <div class="mb-3 row">
              <div class="col-md-6">
                <label for="position2">Position 2</label>
                
                <select name="position2" class="form-control">
                  <option value="">-Pilih-</option>
                  <option value="left-8" <?= isset($data->position2) && $data->position2 == 'left-8' ? 'selected' : '' ?>>left-8</option>
                  <option value="left-1/2" <?= isset($data->position2) && $data->position2 == 'left-1/2' ? 'selected' : '' ?>>left-1/2</option>
                  <option value="right-8" <?= isset($data->position2) && $data->position2 == 'right-8' ? 'selected' : '' ?>>right-8</option>
                  <option value="right-1/2" <?= isset($data->position2) && $data->position2 == 'right-1/2' ? 'selected' : '' ?>>right-1/2</option>
                </select>
                <b class="text-danger" id="position2_error"></b>
              </div>
          </div>

          <div class="form-group">
            <div class="mb-3 row">
              <div class="col-md-6">
                <label for="translate">Translate</label>
                
                <select name="translate" class="form-control">
                  <option value="">-Pilih-</option>
                  <option value="x" <?= isset($data->translate) && $data->translate == 'x' ? 'selected' : '' ?>>x</option>
                  <option value="y" <?= isset($data->translate) && $data->translate == 'y' ? 'selected' : '' ?>>y</option>
                </select>
                <b class="text-danger" id="translate_error"></b>
              </div>
          </div>

          <div class="form-group">
            <div class="mb-3 row">
              <div class="col-md-6">
                <label for="padding_top">Padding Top</label>
                
                <select name="padding_top" class="form-control">
                  <option value="">-Pilih-</option>
                  <option value="8" <?= isset($data->padding_top) && $data->padding_top == '8' ? 'selected' : '' ?>>8</option>
                  <option value="1/2" <?= isset($data->padding_top) && $data->padding_top == '1/2' ? 'selected' : '' ?>>1/2</option>
                </select>
                <b class="text-danger" id="padding_top_error"></b>
              </div>
          </div>

          <div class="col-md-12">
              <button type="button" class="btn btn-primary mr-2" id="btn-submit">
                <i class="mdi mdi-zip-disk"></i> Submit
              </button>

              <a href="<?= base_url() . $this->uri->segment(1) . '/' . $this->uri->segment(2) . '/' . $this->uri->segment(3); ?>"><button type="button" 
                  class="btn btn-light"><i class="mdi mdi-close"></i> Back</button></a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>