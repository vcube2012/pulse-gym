<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
</head>
<script>
    window.setting = {!! \Illuminate\Support\Facades\File::get(storage_path('app/settings.json')) !!}
</script>
</body>
</html>
