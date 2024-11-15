<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="./index.css" />
</head>

<body>
  <header>
    <div class="container mb-3 header-wrapper">
      <div class="d-flex align-items-center">
        <button class="gap-2 d-flex align-items-center btn btn-light" type="button" data-bs-toggle="modal"
          data-bs-target="#categoryModal">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="lucide lucide-circle-plus">
            <circle cx="12" cy="12" r="10" />
            <path d="M8 12h8" />
            <path d="M12 8v8" />
          </svg>
          Thêm mới danh mục
        </button>
      </div>
      <div class="d-flex align-items-center">
        <div class="dropdown d-flex align-items-center me-3">
          <div data-bs-toggle="dropdown" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="lucide lucide-bell">
              <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9" />
              <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0" />
            </svg>
          </div>
          <ul class="dropdown-menu shadow" style="width: 300px">
            <li class="dropdown-item">
              <div class="text-wrap text-success">
                Công việc #12312345 sắp hết hạn.
              </div>
            </li>
            <li class="dropdown-item">
              <div class="text-wrap text-success">
                Công việc #12312345 sắp hết hạn.
              </div>
            </li>
          </ul>
        </div>
        <div class="d-flex align-items-center dropdown">
          <div class="header-user" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="header-user__avatar">
              <img
                src="https://ik.imagekit.io/freeflo/production/49c5f1d8-037e-4478-a530-29db4e21a5fa.png?tr=w-1200,q-75&alt=media&pr-true"
                alt="" />
            </div>
          </div>
          <ul class="dropdown-menu">
            <li>
              <button type="button" class="gap-2 d-flex align-items-center dropdown-item" data-bs-toggle="modal"
                data-bs-target="#activityModal">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-logs">
                  <path d="M13 12h8" />
                  <path d="M13 18h8" />
                  <path d="M13 6h8" />
                  <path d="M3 12h1" />
                  <path d="M3 18h1" />
                  <path d="M3 6h1" />
                  <path d="M8 12h1" />
                  <path d="M8 18h1" />
                  <path d="M8 6h1" />
                </svg>
                Lịch sử hoạt động
              </button>
            </li>
            <li>
              <a class="gap-2 d-flex align-items-center dropdown-item" href="./logout"><svg
                  xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-log-out">
                  <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                  <polyline points="16 17 21 12 16 7" />
                  <line x1="21" x2="9" y1="12" y2="12" />
                </svg>
                Đăng xuất
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <main class="container">
    <div class="pb-2 d-flex justify-content-between align-items-start border-bottom">
      <div>
        <h2 class="fw-bold text-dark text-uppercase">Hôm nay</h2>
        <div class="text-secondary">Thứ sáu, 28 tháng 9</div>
        <img style="width:50px" src="./assets/image/bear-hand-drawn-animal-toy-svgrepo-com.svg">
        <img style="width:50px" src="./assets/image/space-ship-hand-drawn-transport-svgrepo-com.svg">
        <img style="width:50px" src="./assets/image/rattle-hand-drawn-baby-tool-svgrepo-com.svg">
      </div>
      <div>
        <button class="gap-2 d-flex align-items-center btn btn-dark" type="button" data-bs-toggle="modal"
          data-bs-target="#taskModal">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="lucide lucide-circle-plus">
            <circle cx="12" cy="12" r="10" />
            <path d="M8 12h8" />
            <path d="M12 8v8" />
          </svg>Thêm mới

        </button>

        <div class="fade modal" id="taskModal" tabindex="-1" aria-labelledby="taskModal" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="mb-3 form-floating">
                  <input type="text" class="form-control" id="title" placeholder="" required />
                  <label for="title">Tiêu đề</label>
                </div>

                <div class="mb-3 form-floating">
                  <textarea class="form-control" placeholder="" id="description" style="height: 100px"></textarea>
                  <label for="description">Mô tả</label>
                </div>

                <div class="mb-3 form-floating">
                  <select class="form-select" id="category">
                    <option value="1">Công việc cá nhân</option>
                    <option value="2">Công việc gia đình</option>
                    <option value="3">Dự án dài hạn</option>
                    <option value="4">Học tập</option>
                    <option value="5">Sức khỏe</option>
                  </select>
                  <label for="category">Chọn nhóm công việc</label>
                </div>

                <div class="mb-3 form-floating">
                  <select class="form-select" id="priority">
                    <option value="low">Thấp</option>
                    <option value="medium" selected>Trung bình</option>
                    <option value="high">Cao</option>
                  </select>
                  <label for="priority">Chọn mức độ ưu tiên</label>
                </div>

                <div class="mb-3">
                  <label for="dueDate" class="form-label">Ngày hết hạn</label>
                  <input type="date" class="form-control" id="dueDate" />
                </div>

                <div class="mb-3">
                  <label for="attachment" class="form-label">File đính kèm (Nếu có)</label>
                  <input type="file" class="form-control" id="attachment" />
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Hủy</button>
                <button type="button" class="btn btn-dark">Lưu</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mb-3 tab-header">
      <ul class="nav-pills tabs-list" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="active nav-link" data-bs-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1"
            aria-selected="true">
            Công việc cá nhân
          </a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" data-bs-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">
            Công việc gia đình </a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" data-bs-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">
            Dự án dài hạn </a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" data-bs-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">
            Học tập </a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" data-bs-toggle="tab" href="#tab-5" role="tab" aria-controls="tab-5" aria-selected="false">
            Sức khỏe </a>
        </li>
      </ul>
    </div>

    <div class="pb-3 tab-content">
      <div class="active fade show tab-pane" id="tab-1" role="tabpanel">
        <div class="row">
          <div class="col-12 col-md-3">
            <div class="card">
              <img
                src="https://ik.imagekit.io/freeflo/production/c9cb104e-947f-4e1d-b92f-0e725f938853.png?tr=w-1200,q-75&alt=media&pr-true"
                class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <button class="text-white btn btn-warning" type="button" data-bs-toggle="modal"
                  data-bs-target="#taskModal">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-square-pen">
                    <path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                    <path
                      d="M18.375 2.625a1 1 0 0 1 3 3l-9.013 9.014a2 2 0 0 1-.853.505l-2.873.84a.5.5 0 0 1-.62-.62l.84-2.873a2 2 0 0 1 .506-.852z" />
                  </svg>
                </button>
                <button class="btn btn-danger">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide-trash-2 lucide">
                    <path d="M3 6h18" />
                    <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                    <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                    <line x1="10" x2="10" y1="11" y2="17" />
                    <line x1="14" x2="14" y1="11" y2="17" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="fade show tab-pane" id="tab-2" role="tabpanel">
        <div class="row">
          <div class="col-12 col-md-3">
            <div class="card">
              <img
                src="https://ik.imagekit.io/freeflo/production/6b91c700-92c4-4601-8e96-37d84ac3c28c.png?tr=w-1200,q-75&alt=media&pr-true"
                class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <button class="text-white btn btn-warning" type="button" data-bs-toggle="modal"
                  data-bs-target="#taskModal">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-square-pen">
                    <path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                    <path
                      d="M18.375 2.625a1 1 0 0 1 3 3l-9.013 9.014a2 2 0 0 1-.853.505l-2.873.84a.5.5 0 0 1-.62-.62l.84-2.873a2 2 0 0 1 .506-.852z" />
                  </svg>
                </button>
                <button class="btn btn-danger">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide-trash-2 lucide">
                    <path d="M3 6h18" />
                    <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                    <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                    <line x1="10" x2="10" y1="11" y2="17" />
                    <line x1="14" x2="14" y1="11" y2="17" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="fade show tab-pane" id="tab-3" role="tabpanel">
        <div class="row">
          <div class="col-12 col-md-3">
            <div class="card">
              <img
                src="https://ik.imagekit.io/freeflo/production/83a95b7e-4874-4f09-b638-54a9c02541d2.png?tr=w-1200,q-75&alt=media&pr-true"
                class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <button class="text-white btn btn-warning" type="button" data-bs-toggle="modal"
                  data-bs-target="#taskModal">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-square-pen">
                    <path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                    <path
                      d="M18.375 2.625a1 1 0 0 1 3 3l-9.013 9.014a2 2 0 0 1-.853.505l-2.873.84a.5.5 0 0 1-.62-.62l.84-2.873a2 2 0 0 1 .506-.852z" />
                  </svg>
                </button>
                <button class="btn btn-danger">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide-trash-2 lucide">
                    <path d="M3 6h18" />
                    <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                    <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                    <line x1="10" x2="10" y1="11" y2="17" />
                    <line x1="14" x2="14" y1="11" y2="17" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="fade show tab-pane" id="tab-4" role="tabpanel">
        <div class="row">
          <div class="col-12 col-md-3">
            <div class="card">
              <img
                src="https://ik.imagekit.io/freeflo/production/658a77e6-21e8-4f50-b2ce-22cf7f55ea4d.png?tr=w-1200,q-75&alt=media&pr-true"
                class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <button class="text-white btn btn-warning" type="button" data-bs-toggle="modal"
                  data-bs-target="#taskModal">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-square-pen">
                    <path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                    <path
                      d="M18.375 2.625a1 1 0 0 1 3 3l-9.013 9.014a2 2 0 0 1-.853.505l-2.873.84a.5.5 0 0 1-.62-.62l.84-2.873a2 2 0 0 1 .506-.852z" />
                  </svg>
                </button>
                <button class="btn btn-danger">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide-trash-2 lucide">
                    <path d="M3 6h18" />
                    <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                    <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                    <line x1="10" x2="10" y1="11" y2="17" />
                    <line x1="14" x2="14" y1="11" y2="17" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="fade show tab-pane" id="tab-5" role="tabpanel">
        <div class="row">
          <div class="col-12 col-md-3">
            <div class="card">
              <img
                src="https://ik.imagekit.io/freeflo/production/22e52e2c-2983-447e-8cc4-21c6a9bd2ba5.png?tr=w-1200,q-75&alt=media&pr-true"
                class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <button class="text-white btn btn-warning" type="button" data-bs-toggle="modal"
                  data-bs-target="#taskModal">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-square-pen">
                    <path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                    <path
                      d="M18.375 2.625a1 1 0 0 1 3 3l-9.013 9.014a2 2 0 0 1-.853.505l-2.873.84a.5.5 0 0 1-.62-.62l.84-2.873a2 2 0 0 1 .506-.852z" />
                  </svg>
                </button>
                <button class="btn btn-danger">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide-trash-2 lucide">
                    <path d="M3 6h18" />
                    <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                    <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                    <line x1="10" x2="10" y1="11" y2="17" />
                    <line x1="14" x2="14" y1="11" y2="17" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <img style="width:100%; border-radius: 12px;" src="./assets/image/maxresdefault.jpg">
  </main>

  <div class="fade modal" id="categoryModal" tabindex="-1" aria-labelledby="categoryModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="./addCategory" method="post" autocomplete="off">
          <div class="modal-header">
            <h5 class="modal-title">Thêm mới danh mục</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3 form-floating">
              <input type="text" class="form-control" name="categoryName" id="categoryName" placeholder="" required />
              <label for="name">Tên danh mục</label>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Hủy</button>
            <button type="submit" class="btn btn-dark">Thêm mới</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="activityModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Lịch sử hoạt động</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul class="list-group">
            <li class="list-group-item list-group-item-light text-dark">
              <div class="d-flex w-100 justify-content-between align-items-center">
                <div>Bạn vừa thêm một công việc</div>
                <small class="text-danger">10 phút trước</small>
              </div>
            </li>
            <li class="list-group-item list-group-item-light text-dark">
              <div class="d-flex w-100 justify-content-between align-items-center">
                <div>Bạn vừa cập nhật công việc</div>
                <small class="text-danger">10 phút trước</small>
              </div>
            </li>
            <li class="list-group-item list-group-item-light text-dark">
              <div class="d-flex w-100 justify-content-between align-items-center">
                <div>Bạn vừa xóa một công việc</div>
                <small class="text-danger">10 phút trước</small>
              </div>
            </li>
            <li class="list-group-item list-group-item-light text-dark">
              <div class="d-flex w-100 justify-content-between align-items-center">
                <div>Bạn vừa thêm một công việc</div>
                <small class="text-danger">10 phút trước</small>
              </div>
            </li>
            <li class="list-group-item list-group-item-light text-dark">
              <div class="d-flex w-100 justify-content-between align-items-center">
                <div>Bạn vừa thêm một công việc</div>
                <small class="text-danger">10 phút trước</small>
              </div>
            </li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Đóng</button>
        </div>
      </div>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>