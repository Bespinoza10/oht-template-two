<div class="collapse" id="loginDrop">
  <div class="well">
    <div class="row">
      <div class="col-md-12">
        <h3>Login</h3>
        <form>
          <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Su Nombre *" id="name" required data-validation-required-message="Please enter your name." required="true">
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                  <input type="email" class="form-control" placeholder="Su Email *" id="email" required data-validation-required-message="Please enter your email address." required="true">
                  <p class="help-block text-danger"></p>
              </div>
            </div>

            <div class="clearfix"></div>
            <div class="col-lg-12 text-center padding-section-elements-bottom">
            <div id="success"></div>
            <button type="submit" class="btn btn-success">Login</button>
            </div>
          </div>
        </form>
        <a class="btn btn-warning" role="button" data-toggle="collapse" href="#loginDrop" aria-expanded="false"    aria-controls="collapseExample">
          Cancel
        </a>
      </div>
    </div>
  </div>
</div>
