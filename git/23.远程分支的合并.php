应用场景：如何在远程服务器合并分支

1. git checkout main —— 切换到主分支
2. git pull —— 拉取最新的主分支
3. git checkout 分支名  —— 切换到自己开发的分支
3. git rebase main —— 将当前分支的起始点移动到主分支最后的位置
4. 处理产生冲突的文件
5. git checkout main —— 切换到主分支
6. git merge 分支名 —— 执行合并分支命令
7. git push —— 将主分支推送到远程
