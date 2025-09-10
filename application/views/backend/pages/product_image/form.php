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
                  <option value="TOP" <?= isset($data->position) && $data->position == 'TOP' ? 'selected' : '' ?>>TOP</option>
                  <option value="LEFT" <?= isset($data->position) && $data->position == 'LEFT' ? 'selected' : '' ?>>LEFT</option>
                  <option value="RIGHT" <?= isset($data->position) && $data->position == 'RIGHT' ? 'selected' : '' ?>>RIGHT</option>
                  <!-- <option value="BOTTOM" <?= isset($data->position) && $data->position == 'BOTTOM' ? 'selected' : '' ?>>BOTTOM</option> -->
                  <option value="TOP LEFT" <?= isset($data->position) && $data->position == 'TOP LEFT' ? 'selected' : '' ?>>TOP LEFT</option>
                  <option value="TOP RIGHT" <?= isset($data->position) && $data->position == 'TOP RIGHT' ? 'selected' : '' ?>>TOP RIGHT</option>
                </select>
                <b class="text-danger" id="position_error"></b>
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