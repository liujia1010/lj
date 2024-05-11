设置Git 保持远程文件权限不变的命令：
git config --global core.fileMode false
这个命令会在全局设置中设置core.fileMode为false,这样Git就不会自动修改文件权限了

如果只想对当前仓库设置而不影响全局设置，可以省略--global参数
git config core.fileMode false
