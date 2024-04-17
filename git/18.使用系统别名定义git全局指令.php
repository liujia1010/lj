记录如何在git bash 中设置别名 定义 git 全局指令
1. 进入git bash命令行
2. 通过cd 命令进入当前用户的主目录
3. 通过ls -a 查看主目录下的所有文件，查看是否存在 .bashrc或.bash_profile 文件
4. 通过vim 打开.bashrc或.bash_profile文件
5. 输入 alias gs='git status' 等命令，需要注意的是——gs和=和'git status'之间不允许有空格
6. 保存上述文件，在git bash 命令行 运行source .bashrc 命令
7. 关闭当前git bash ，重新打开新的终端，别名即可生效