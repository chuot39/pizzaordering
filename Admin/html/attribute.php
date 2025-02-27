<?php require_once 'header.php' ?>
<div class="main-content">
  <div class="section__content section__content--p30">
    <div class="row">
      <div class="col-md-12">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">data table</h3>
        <div class="row">
          <div class="col-md-7 invisible">
            <div class="row">
              <div class="col col-md-5 mr-3">
                <input type="text" id="input-large" name="input-large" placeholder="Trí ngu" class="form-control-lg">
              </div>
              <div class="col col-md-2 mt-1">
                <button type="button" class="btn btn-success">
                  <i class="fa fa-plus"></i></button>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="table-data__tool col-md-12">
              <div class="table-data__tool-right">
                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                  <i class="zmdi zmdi-plus"></i>add cate</button>
              </div>
            </div>
          </div>
        </div>
        <div class="table-responsive table-responsive-data2">
          <table class="table table-data2">
            <thead>
              <tr>
                <th>
                  <label class="au-checkbox">
                    <input type="checkbox">
                    <span class="au-checkmark"></span>
                  </label>
                </th>
                <th>name</th>
                <th>email</th>
                <th>description</th>
                <th>date</th>
                <th>status</th>
                <th>price</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr class="tr-shadow">
                <td>
                  <label class="au-checkbox">
                    <input type="checkbox">
                    <span class="au-checkmark"></span>
                  </label>
                </td>
                <td>Lori Lynch</td>
                <td>
                  <span class="block-email">lori@example.com</span>
                </td>
                <td class="desc">Samsung S8 Black</td>
                <td>2023-07-05 02:12</td>
                <td>
                  <span class="status--process">Processed</span>
                </td>
                <td>$679.00</td>
                <td>
                  <div class="table-data-feature">
                    <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                      <i class="zmdi zmdi-mail-send"></i>
                    </button>
                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                      <i class="zmdi zmdi-edit"></i>
                    </button>
                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                      <i class="zmdi zmdi-delete"></i>
                    </button>
                    <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                      <i class="zmdi zmdi-more"></i>
                    </button>
                  </div>
                </td>
              </tr>
              <tr class="spacer"></tr>
              <tr class="tr-shadow">
                <td>
                  <label class="au-checkbox">
                    <input type="checkbox">
                    <span class="au-checkmark"></span>
                  </label>
                </td>
                <td>Lori Lynch</td>
                <td>
                  <span class="block-email">john@example.com</span>
                </td>
                <td class="desc">iPhone X 64Gb Grey</td>
                <td>2023-07-05 05:57</td>
                <td>
                  <span class="status--process">Processed</span>
                </td>
                <td>$999.00</td>
                <td>
                  <div class="table-data-feature">
                    <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                      <i class="zmdi zmdi-mail-send"></i>
                    </button>
                    <a href="detail-product.php" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                      <i class="zmdi zmdi-edit"></i>
                    </a>
                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                      <i class="zmdi zmdi-delete"></i>
                    </button>
                    <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                      <i class="zmdi zmdi-more"></i>
                    </button>
                  </div>
                </td>
              </tr>
              <tr class="spacer"></tr>
              <tr class="tr-shadow">
                <td>
                  <label class="au-checkbox">
                    <input type="checkbox">
                    <span class="au-checkmark"></span>
                  </label>
                </td>
                <td>Lori Lynch</td>
                <td>
                  <span class="block-email">lyn@example.com</span>
                </td>
                <td class="desc">iPhone X 256Gb Black</td>
                <td>2023-07-05 19:03</td>
                <td>
                  <span class="status--denied">Denied</span>
                </td>
                <td>$1199.00</td>
                <td>
                  <div class="table-data-feature">
                    <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                      <i class="zmdi zmdi-mail-send"></i>
                    </button>
                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                      <i class="zmdi zmdi-edit"></i>
                    </button>
                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                      <i class="zmdi zmdi-delete"></i>
                    </button>
                    <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                      <i class="zmdi zmdi-more"></i>
                    </button>
                  </div>
                </td>
              </tr>
              <tr class="spacer"></tr>
              <tr class="tr-shadow">
                <td>
                  <label class="au-checkbox">
                    <input type="checkbox">
                    <span class="au-checkmark"></span>
                  </label>
                </td>
                <td>Lori Lynch</td>
                <td>
                  <span class="block-email">doe@example.com</span>
                </td>
                <td class="desc">Camera C430W 4k</td>
                <td>2023-07-05 19:10</td>
                <td>
                  <span class="status--process">Processed</span>
                </td>
                <td>$699.00</td>
                <td>
                  <div class="table-data-feature">
                    <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                      <i class="zmdi zmdi-mail-send"></i>
                    </button>
                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                      <i class="zmdi zmdi-edit"></i>
                    </button>
                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                      <i class="zmdi zmdi-delete"></i>
                    </button>
                    <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                      <i class="zmdi zmdi-more"></i>
                    </button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- END DATA TABLE -->
      </div>
    </div>

  </div>
</div>

<?php require_once 'footer.php' ?>