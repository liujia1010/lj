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


git版本低如何升级？

1. 查看git版本
git --version

2. 安装依赖
源代码安装和编译git，需要安装依赖，具体命令：
yum install curl-devel expat-devel gettext-devel openssl-devel zlib-devel asciidoc
yum install gcc perl-ExtUtils-MakeMaker

3. 卸载旧版本的git
yum remove git

4. 打开文件夹
cd /www  在www下存放git安装包

5. 下载git某个版本的压缩包

wget https://mirrors.edge.kernel.org/pub/software/scm/git/git-2.41.0.tar.xz

6. 解压压缩包

ls -a 查看文件是否下载成功

解压
tar -xvf git-2.41.0.tar.xz

7. 进入解压好的git文件夹

cd git-2.41.0

8. 编译

make prefix=/usr/local/git all

9. 安装

make prefix=/usr/local/git install

10. 配置环境变量

vim /etc/profile

在文件底部添加上：
export GIT_HOME=/usr/local/git/bin
export PATH=$GIT_HOME:$PATH

添加完成后，刷新环境变量
source /etc/profile

11. 查看git版本

git --version

