开发配置

第一步：克隆项目`http://git.cqxiaokang.local/yuchangwei/ycw-test-bundle.git`到框架的根目录下，命名为`ycw-test-bundle`;

第二步：在`composer.json`中添加以下配置：

        "autoload": {
            "psr-4": {
            "Ycw\\TestBundle\\": "src/"
            }
        },
        "autoload-dev": {
            "psr-4": {
              "Ycw\\TestBundle\\Tests\\": "Tests/"
        }

然后更新composer的自动加载代码：

        composer update nothing

第三步：在`/config/bundles.php`添加以下代码：

        Ycw\TestBundle\YcwTestBundle::class => ['all' => true],

第四步：在`/config/routes/`目录中添加文件`ycw_test.yaml`

ycw_test.yaml 路由如下:

        ycw_test:
          prefix: /
          resource: '@YcwTestBundle/Resources/config/routing.yaml'

配置完成，执行命令`bin/console debug:route`查看路由设置；