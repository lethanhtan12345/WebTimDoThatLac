
<?php $__env->startSection('content'); ?>

    <table class="table table-light" id="tabledanhmuc">
        <thead class=" table-dark">
            <tr>               
                <th>Tên danh mục</th>               
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
    $('#tabledanhmuc').DataTable({
        processing: true,
        serverSide: true,
        ajax: '<?php echo route('danhmuc.lay-du-lieu'); ?>',
        columns: [
            // { data: 'DT_RowIndex', name: 'DT_RowIndex' },
            { data: 'tendanhmuc', name: 'tendanhmuc' },          
            { data: 'chucnang', name: 'chucnang' },            
        ]
    });
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('quanly', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LT_PHP\WebTimDo\myproject\resources\views/quanly/quanlydanhmuc.blade.php ENDPATH**/ ?>