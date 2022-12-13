
<?php $__env->startSection('content'); ?>

    <table class="table table-light" id="tabletintuc">
        <thead class=" table-dark">
            <tr>
                
                <th>Tên người đăng</th>               
                <th>Loại tin</th>
                <th>Tiêu đề</th>              
                
                <th>Danh mục</th>
                <th>Chức năng</th>
            </tr>
        </thead>
        
    </table>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script  src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script  src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script>
    $(function() {
    $('#tabletintuc').DataTable({
        processing: true,
        serverSide: true,
        ajax: '<?php echo route('tintuc.lay-du-lieu'); ?>',
        columns: [
            
            { data: 'username', name: 'username' },
            { data: 'loaitin', name: 'loaitin' },
            { data: 'tieude', name: 'tieude' },
           
           
            { data: 'danhmuc', name: 'danhmuc' },
            { data: 'chucnang', name: 'chucnang' },
            
        ]
    });
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('quanly', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LT_PHP\WebTimDo\myproject\resources\views/quanly/quanlytintuc.blade.php ENDPATH**/ ?>