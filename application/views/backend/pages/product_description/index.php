<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-header">        
            <form id="formPrintOrMutlipleDelete" action="#" method="post">   
                <div class="grid-margin">
                    <!-- for type submit delete or print -->
                    <input type="hidden" name="position" id="position" value="<?= $position ?>">
                    <input type="hidden" name="slug" id="slug" value="<?= $slug ?>">
                    <a href="<?= base_url() . $this->uri->segment(1) . '/' . $this->uri->segment(2) . '/' . $this->uri->segment(3) . '/' . $this->uri->segment(4);?>/create" 
                        class="btn btn-primary" title="Create">
                        <i class="bi bi-plus"></i> Add</a>
                </div>
            </form>
        </div>                  
        <div class="card-body">
            <div class="table-responsive m-t-40">
                <table id="myTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width: 5%">No</th>
                            <th>Position</th>
                            <th>Title</th>
                            <th>Product</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>      
    </div>
</div>