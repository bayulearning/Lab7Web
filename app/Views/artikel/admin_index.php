<?= $this->include('template/admin_header'); ?>

<h2><?= $title; ?></h2>

<div class="row mb-3">
  <div class="col-md-6">
    <form id="search-form" class="form-inline">
      <input type="text" name="q" id="search-box" value="<?= $q; ?>" placeholder="Cari judul artikel" class="form-control mr-2">
      <select name="kategori_id" id="category-filter" class="form-control mr-2">
        <option value="">Semua Kategori</option>
        <?php foreach ($kategori as $k): ?>
          <option value="<?= $k['id_kategori']; ?>" <?= ($kategori_id == $k['id_kategori']) ? 'selected' : ''; ?>>
            <?= $k['nama_kategori']; ?>
          </option>
        <?php endforeach; ?>
      </select>
      <input type="submit" value="Cari" class="btn btn-primary">
    </form>
  </div>
</div>

<div id="article-container">
  <?= $this->include('artikel/_list'); ?>
</div>

<div id="pagination-container">
  <?= $this->include('artikel/_pagination'); ?>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script>
$(document).ready(function() {
  const articleContainer = $('#article-container');
  const paginationContainer = $('#pagination-container');
  const searchForm = $('#search-form');
  const searchBox = $('#search-box');
  const categoryFilter = $('#category-filter');

  const fetchData = (url) => {
    $.ajax({
      url: url,
      type: 'GET',
      dataType: 'json',
      headers: { 'X-Requested-With': 'XMLHttpRequest' },
      success: function(data) {
        articleContainer.html(data.artikel);
        paginationContainer.html(data.pager);

        // Daftarkan ulang klik pagination
        $('a[data-page=true]').on('click', function(e) {
          e.preventDefault();
          const url = $(this).attr('href');
          fetchData(url);
        });
      }
    });
  };

  searchForm.on('submit', function(e) {
    e.preventDefault();
    const q = searchBox.val();
    const kategori_id = categoryFilter.val();
    fetchData(`/admin/artikel?q=${q}&kategori_id=${kategori_id}`);
  });

  categoryFilter.on('change', function() {
    searchForm.trigger('submit');
  });

  // Inisialisasi klik pagination awal
  $(document).on('click', '.pagination a', function(e) {
  e.preventDefault();
  const url = $(this).attr('href');
  fetchData(url);
});

});
</script>

<?= $this->include('template/admin_footer'); ?>
