1. 安装git 
	yum install git

2. 安装完成git,查看git版本
	git -v
3. 配置全局变量
	git config --global user.name 'lj' —— lj是git的用户名
	git config --global user.email '1595040768@qq.com' —— 1595040768@qq.com 是git的用户名邮箱
4. 生成授权证书（git的授权证书是基于公钥和私钥的证书体系，所以需要证书体系）
	ssh-keygen -t rsa -C '1595040768@qq.com' (1. 表示文件名，2.表示生成证书的密码，3.表示确认密码) 按3次回车
5. 切换到ssh目录下查看证书是否生成
	cd ~/.ssh
	ls -a (显示文件夹中的文件，这里的id_rsa是私钥，id_rsa.pub表示公钥)
6. 实现git和GitHub的链接
	登陆GitHub，点击头像，进入Setting页面，点击SSH and GPG keys,点击New SSH key;
	然后填写SSH key。 key是上面生成的公钥
创建一个Git项目，两种方式：
1. 方式一：进入项目目录，通过git clone 命令
	git clone gitSSH项目地址 '想要克隆到的文件夹' 