$(function () {var f2 = false; $(document).keydown(function (e) {if (f2) return; if (e.keyCode === 113) {f2 = true; } }); $(document).keyup(function () {f2 = false; }); $(document).on('click', '[data-trans]', function (e) {if (f2 || e.f2 === true) {e.preventDefault(); var trans = $('#translations'); var url = trans.data('trans-url'); if (url && url !== '/#not_found') {$.get(trans.data('trans-url'), {'code':$(this).data('trans'), '_token':trans.data('token')}, function (data) {$('body').append(data); }).fail(function (xhr) {alert(xhr.responseText); }); } } }); $(document).on('submit', 'form', function() {$('input[type="submit"], button[type="submit"]', this).prop('disabled', true); setTimeout(function(form) {$('input[type="submit"], button[type="submit"]', form).prop('disabled', false); }, 800, this); }); });
