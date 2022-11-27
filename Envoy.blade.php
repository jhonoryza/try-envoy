@servers([
    'web' => ['root@8.219.208.17']
])
 
@task('deploy', ['on' => 'web'])
    cd /root/www/envoy.labkita.my.id
 
    @if ($branch)
        git pull origin {{ $branch }}
        composer update
    @endif
 
@endtask
