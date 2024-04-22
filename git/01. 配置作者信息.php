1. 配置作者信息
配置文件为 ~/.gitconfig,执行任何Git配置命令后文件将自动创建。
第一个要配置的是个人的用户名称和电子邮件地址，这两条配置很重要，每次Git提交时都会引用这两条信息，说明是谁提交了更新，所以会随更新内容一起被永久纳入历史记录。
git config --global user.email "1595040768@qq.com"
git config --global user.name "liujia"

设置默认使用的文本编辑器，下面我使用的是sublime

git config --global core.editor subl