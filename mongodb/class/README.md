php操作mongodb类
===

简单封装了一些mongo数据库的操作，支持负载均衡，

需要注意的是update操作，mongo的修改操作很特别，$set是可以局部修改字段的。不加会清空其他字段
