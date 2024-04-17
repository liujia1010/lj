分支的创建与切换

git branch —— 查看仓库分支
git branch 分支名  —— 创建一个新分支
git checkout 分支名 —— 切换成对应分支
git checkout -b 分支名 —— 创建一个分支，并且切换进入

分支的合并与删除

首先切换到主分支master

git merge 分支名  —— 合并分支到主分支
git branch -d 分支名 —— 删除分支

处理分支冲突

测试

你好，我是测试冲突



我又来了测试，看你能怎么办

我是t2测试冲突，就要跟t1干

分支管理

git branch --merged —— 显示已经合并的分支

git branch --no-merged —— 显示没有合并的分支