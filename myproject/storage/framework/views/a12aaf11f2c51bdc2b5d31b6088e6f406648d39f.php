
<?php $__env->startSection('content'); ?>

    <table class="table table-light" id="tablenguoidung">
        <thead class=" table-dark">
            <tr>
                
                <th>Tên đăng nhập</th>               
                <th>Điện thoại</th>
                <th>Email</th>
                <th>Chức vụ</th>
                
            </tr>
        </thead>
        
        
    </table>
    
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script  src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script  src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script>
    $(function() {
    $('#tablenguoidung').DataTable({
        processing: true,
        serverSide: true,
        ajax: '<?php echo route('nguoidung.lay-du-lieu'); ?>',
        columns: [
            
            { data: 'name', name: 'name' },
            { data: 'sdt', name: 'sdt' },
            { data: 'email', name: 'email' },
            { data: 'chucvu', name: 'chucvu' },
          
            
        ]
    });
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('quanly', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LT_PHP\WebTimDo\myproject\resources\views/quanly/quanlynguoidung.blade.php ENDPATH**/ ?>