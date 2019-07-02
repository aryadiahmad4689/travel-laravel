<script src="{!! asset('assets/plugins/pace/pace.min.js') !!} " type="text/javascript"></script>
<script src="{!! asset('assets/plugins/jquery/jquery-3.2.1.min.js') !!} " type="text/javascript"></script>
<script src="{!! asset('assets/plugins/modernizr.custom.js') !!} " type="text/javascript"></script>
<script src="{!! asset('assets/plugins/jquery-ui/jquery-ui.min.js') !!} " type="text/javascript"></script>
<script src="{!! asset('assets/plugins/popper/umd/popper.min.js') !!} " type="text/javascript"></script>
<script src="{!! asset('assets/plugins/bootstrap/js/bootstrap.min.js') !!} " type="text/javascript"></script>
<script src="{!! asset('assets/plugins/jquery/jquery-easy.js') !!} " type="text/javascript"></script>
<script src="{!! asset('assets/plugins/jquery-unveil/jquery.unveil.min.js') !!} " type="text/javascript"></script>
<script src="{!! asset('assets/plugins/jquery-ios-list/jquery.ioslist.min.js') !!} " type="text/javascript"></script>
<script src="{!! asset('assets/plugins/jquery-actual/jquery.actual.min.js') !!} "></script>
<script src="{!! asset('assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js') !!} "></script>
<script type="text/javascript" src="{!! asset('assets/plugins/select2/js/select2.full.min.js') !!} "></script>
<script type="text/javascript" src="{!! asset('assets/plugins/classie/classie.js') !!} "></script>
<script src="{!! asset('assets/plugins/switchery/js/switchery.min.js') !!} " type="text/javascript"></script>
<script src="{!! asset('assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js') !!} " type="text/javascript"></script>
<script src="{!! asset('assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js') !!} " type="text/javascript"></script>
<script src="{!! asset('assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js') !!} " type="text/javascript"></script>
<script src="{!! asset('assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js') !!} " type="text/javascript"></script>
<script type="text/javascript" src="{!! asset('assets/plugins/datatables-responsive/js/datatables.responsive.js') !!} "></script>
<script type="text/javascript" src="{!! asset('assets/plugins/datatables-responsive/js/lodash.min.js') !!} "></script>
<script src="{!! asset('assets/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.all.min.js') !!} "></script>
<script type="text/javascript" src="{!! asset('assets/plugins/jquery-autonumeric/autoNumeric.js') !!} "></script>
<script type="text/javascript" src="{!! asset('assets/plugins/dropzone/dropzone.min.js') !!} "></script>
<script type="text/javascript" src="{!! asset('assets/plugins/bootstrap-tag/bootstrap-tagsinput.min.js') !!} "></script>
<script type="text/javascript" src="{!! asset('assets/plugins/jquery-inputmask/jquery.inputmask.min.js') !!} "></script>
<script src="{!! asset('assets/plugins/bootstrap-form-wizard/js/jquery.bootstrap.wizard.min.js') !!} " type="text/javascript"></script>
<script src="{!! asset('assets/plugins/jquery-validation/js/jquery.validate.min.js') !!} " type="text/javascript"></script>
<script src="{!! asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') !!} " type="text/javascript"></script>
<script src="{!! asset('assets/plugins/summernote/js/summernote.min.js') !!} " type="text/javascript"></script>
<script src="{!! asset('assets/plugins/moment/moment.min.js') !!} "></script>
<script src="{!! asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') !!} "></script>
<script src="{!! asset('assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js') !!} "></script>
<script src="{!! asset('assets/plugins/bootstrap-typehead/typeahead.bundle.min.js') !!} "></script>
<script src="{!! asset('assets/plugins/bootstrap-typehead/typeahead.jquery.min.js') !!} "></script>
<script src="{!! asset('assets/plugins/handlebars/handlebars-v4.0.5.js') !!} "></script>
<script src="{!! asset('assets/js/form_elements.js') !!}" type="text/javascript"></script>
<script type="text/javascript">
  $('#btn-delete').click(function(event) {
    swal({
      type: 'success',
      title: 'data berhasil di hapus !',
      showConfirmButton: false,
      timer: 5000
    })
  });
</script>
<!-- END VENDOR JS -->
<!-- BEGIN CORE TEMPLATE JS -->
<script src="{!! asset('pages/js/pages.min.js') !!} "></script>
<!-- END CORE TEMPLATE JS -->
<!-- BEGIN PAGE LEVEL JS -->
<script src="{!! asset('assets/js/datatables.js') !!} " type="text/javascript"></script>
<script src="{!! asset('assets/js/scripts.js') !!} " type="text/javascript"></script>
<!-- END PAGE LEVEL JS -->

<!-- java script tambahan saya -->
<script src="{!! asset('assets/js/tambahan.js') !!} " type="text/javascript"></script>

<script src="{!! asset('assets/select2/dist/js/select2.min.js') !!} " type="text/javascript"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

{{-- boostrap --}}

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

{{-- lte script --}}
<!-- jQuery 3 -->
<script src="{{asset('lte/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('lte/bower_components/bootstrap/dist/')}}/bootstrap.min.js}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('lte/dist/js/adminlte.min.js')}}"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. --><script src="{!! asset('assets/plugins/pace/pace.min.js') !!} " type="text/javascript"></script>
<script src="{!! asset('assets/plugins/jquery/jquery-3.2.1.min.js') !!} " type="text/javascript"></script>
<script src="{!! asset('assets/plugins/modernizr.custom.js') !!} " type="text/javascript"></script>
<script src="{!! asset('assets/plugins/jquery-ui/jquery-ui.min.js') !!} " type="text/javascript"></script>
<script src="{!! asset('assets/plugins/popper/umd/popper.min.js') !!} " type="text/javascript"></script>
<script src="{!! asset('assets/plugins/bootstrap/js/bootstrap.min.js') !!} " type="text/javascript"></script>
<script src="{!! asset('assets/plugins/jquery/jquery-easy.js') !!} " type="text/javascript"></script>
<script src="{!! asset('assets/plugins/jquery-unveil/jquery.unveil.min.js') !!} " type="text/javascript"></script>
<script src="{!! asset('assets/plugins/jquery-ios-list/jquery.ioslist.min.js') !!} " type="text/javascript"></script>
<script src="{!! asset('assets/plugins/jquery-actual/jquery.actual.min.js') !!} "></script>
<script src="{!! asset('assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js') !!} "></script>
<script type="text/javascript" src="{!! asset('assets/plugins/select2/js/select2.full.min.js') !!} "></script>
<script type="text/javascript" src="{!! asset('assets/plugins/classie/classie.js') !!} "></script>
<script src="{!! asset('assets/plugins/switchery/js/switchery.min.js') !!} " type="text/javascript"></script>
<script src="{!! asset('assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js') !!} " type="text/javascript"></script>
<script src="{!! asset('assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js') !!} " type="text/javascript"></script>
<script src="{!! asset('assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js') !!} " type="text/javascript"></script>
<script src="{!! asset('assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js') !!} " type="text/javascript"></script>
<script type="text/javascript" src="{!! asset('assets/plugins/datatables-responsive/js/datatables.responsive.js') !!} "></script>
<script type="text/javascript" src="{!! asset('assets/plugins/datatables-responsive/js/lodash.min.js') !!} "></script>
<script src="{!! asset('assets/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.all.min.js') !!} "></script>
<script type="text/javascript" src="{!! asset('assets/plugins/jquery-autonumeric/autoNumeric.js') !!} "></script>
<script type="text/javascript" src="{!! asset('assets/plugins/dropzone/dropzone.min.js') !!} "></script>
<script type="text/javascript" src="{!! asset('assets/plugins/bootstrap-tag/bootstrap-tagsinput.min.js') !!} "></script>
<script type="text/javascript" src="{!! asset('assets/plugins/jquery-inputmask/jquery.inputmask.min.js') !!} "></script>
<script src="{!! asset('assets/plugins/bootstrap-form-wizard/js/jquery.bootstrap.wizard.min.js') !!} " type="text/javascript"></script>
<script src="{!! asset('assets/plugins/jquery-validation/js/jquery.validate.min.js') !!} " type="text/javascript"></script>
<script src="{!! asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') !!} " type="text/javascript"></script>
<script src="{!! asset('assets/plugins/summernote/js/summernote.min.js') !!} " type="text/javascript"></script>
<script src="{!! asset('assets/plugins/moment/moment.min.js') !!} "></script>
<script src="{!! asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') !!} "></script>
<script src="{!! asset('assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js') !!} "></script>
<script src="{!! asset('assets/plugins/bootstrap-typehead/typeahead.bundle.min.js') !!} "></script>
<script src="{!! asset('assets/plugins/bootstrap-typehead/typeahead.jquery.min.js') !!} "></script>
<script src="{!! asset('assets/plugins/handlebars/handlebars-v4.0.5.js') !!} "></script>
<script src="{!! asset('assets/js/form_elements.js') !!}" type="text/javascript"></script>
<script type="text/javascript">
  $('#btn-delete').click(function(event) {
    swal({
      type: 'success',
      title: 'data berhasil di hapus !',
      showConfirmButton: false,
      timer: 5000
    })
  });
</script>
<!-- END VENDOR JS -->
<!-- BEGIN CORE TEMPLATE JS -->
<script src="{!! asset('pages/js/pages.min.js') !!} "></script>
<!-- END CORE TEMPLATE JS -->
<!-- BEGIN PAGE LEVEL JS -->
<script src="{!! asset('assets/js/datatables.js') !!} " type="text/javascript"></script>
<script src="{!! asset('assets/js/scripts.js') !!} " type="text/javascript"></script>
<!-- END PAGE LEVEL JS -->

<!-- java script tambahan saya -->
<script src="{!! asset('assets/js/tambahan.js') !!} " type="text/javascript"></script>

<script src="{!! asset('assets/select2/dist/js/select2.min.js') !!} " type="text/javascript"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

{{-- boostrap --}}

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

{{-- lte script --}}
<!-- jQuery 3 -->
<script src="{{asset('lte/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('lte/bower_components/bootstrap/dist/')}}/bootstrap.min.js}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('lte/dist/js/adminlte.min.js')}}"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->