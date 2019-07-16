<!-- Add supplier start here -->
<div class="addCustomer">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="float: right;padding: 5px;margin: 10px;">
        Add Sub-Category
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Sub-Category Infornation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="#" method="post">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">Sub-Category Name</label>
                            <div class="col-sm-10">
                                <input type="name" class="form-control" id="Cname"  name="Cname">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="phone">Sub-Category description</label>
                            <div class="col-sm-10">
                                <input type="phone" class="form-control" id="phone"  name="phone">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                <label><input type="checkbox" name="remember"> Remember me</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>




