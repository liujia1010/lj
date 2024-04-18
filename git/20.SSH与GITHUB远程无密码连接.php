SSH 生成秘钥
使用SSH链接Github 发送指令更加安全可靠，也可以避免每次输入密码的困扰。
在命令行中输入以下代码（windows用户使用GitBash)

ssh-keygen -t rsa

一直按回车键知道结束。系统会在~/.ssh 目录中生成id_rsa和id_rsa.pub,即密钥id_rsa和公钥id_rsa.pub

在GitHub中添加密钥

进入.ssh 目录，cd .ssh
打开id_rsa.pub
vim id_rsa.pub

将公钥放置在GitHub的SSH keys中

然后复制创建项目的SSH链接

进入本地的git 项目

添加远程仓库

git remote add origin gitSSH链接

查看远程库

git remote -V

推送数据到远程仓库

git push -u origin master

删除远程仓库关联

git remote rm origin

通过clone 克隆的仓库（执行 git clone gitSSH链接），本地与远程已经自动关联，上面几步可以省略。

