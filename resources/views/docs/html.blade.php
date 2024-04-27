<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
  <div class="container mt-5">
    <h5 class="mb-3">Form Product</h5>
    <form enctype="multipart/form-data" id="productForm">
      <div class="mb-3">
        <label for="name_product" class="form-label">Product Name</label>
        <input type="text" name="name_product" class="form-control" id="name_product" placeholder="Name product">
      </div>

      <div class="row">
        <div class="col-6">
          <label for="name_product" class="form-label">Category</label>
          <select class="form-select mb-3" aria-label="category" name="category_id">
            <option selected>Select Category</option>
          </select>
        </div>
        <div class="col-6">
          <div class="mb-3">
            <label for="image_product" class="form-label">Product Image</label>
            <input class="form-control" type="file" id="image_product" name="image_product">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-6">
          <div class="mb-3">
            <label for="amount" class="form-label">Amount</label>
            <input type="number" name="amount" class="form-control" id="amount" placeholder="Amount for product">
          </div>
        </div>
        <div class="col-6">
          <div class="mb-3">
            <label for="qty" class="form-label">Qty</label>
            <input type="number" name="qty" class="form-control" id="qty" placeholder="Qty for product">
          </div>
        </div>
      </div>

      <!-- <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
      </div> -->

      <button class="btn btn-primary" type="submit">Create</button>
    </form>
  </div>


  <script src="preload.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
