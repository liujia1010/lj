应用场景：分支误删除后，恢复分支

命令：

1. git reflog —— 查看引用历史记录，包括已经删除的引用
2. 找到删除分支的最后一个commit ID,在引用历史记录可以看到类似下面的信息
	8a79c3f HEAD@{1}:commit: add feature A
	63a0a50 HEAD@{2}:commit: add feature B
	2abe147 HEAD@{3}: branch: add-feature-C
	其中，“HEAD@{n}”表示第n次引用操作，“commit”表示该引用操作的类型是提交操作，‘add add feature B’表示提交操作对应的 commit message。
3. git branch <branch-name> <commit-id></commit-id> </branch-name> —— 使用该命令恢复分支，branch-name 是要恢复的分支名，commit-id 是该分支最后一次提交的commit的ID

4. git checkout <branch-name></branch-name> —— 切换到已经恢复的分支
