# MeiliSearch

MeiliSearch 技术文档 简介 MeiliSearch 是一个开源的全文搜索引擎，旨在提供快速、可靠的搜索体验。它是用 Rust 编写的，具有高性能和可扩展性。

安装 MeiliSearch 可以通过以下几种方式进行安装：

1. 使用预编译的二进制文件 可以从 MeiliSearch 的官方网站下载预编译的二进制文件，并按照官方文档中的指示进行安装。

2. 使用 Docker MeiliSearch 也提供了 Docker 镜像，可以通过 Docker Hub 进行下载和安装。详细的安装步骤请参考官方文档。

3. 自行编译源代码 如果需要自定义配置或者对源代码进行修改，可以从 MeiliSearch 的 GitHub 仓库中获取源代码，并按照官方文档中的指示进行编译和安装。

使用 MeiliSearch 提供了丰富的 API 和 SDK，以便于开发者进行搜索引擎的集成和使用。以下是一些常用的使用示例：

1. 创建索引 可以使用 MeiliSearch 的 API 创建一个新的索引，指定索引的名称和设置。

bash POST /indexes {
"name": "books",
"settings": {
"searchableAttributes": ["title", "author"],
"displayedAttributes": ["title", "author", "description"]
} }

2. 添加文档 可以使用 MeiliSearch 的 API 向索引中添加文档。

bash POST /indexes/books/documents
[
{ "title": "Book 1", "author": "Author 1", "description": "This is book 1." }, { "title": "Book 2", "author": "Author 2", "description": "This is book 2." }
]

3. 执行搜索 可以使用 MeiliSearch 的 API 执行搜索操作。

bash GET /indexes/books/search?q=book

4. 使用 SDK MeiliSearch 还提供了多种语言的 SDK，可以更方便地进行集成和使用。可以在官方文档中找到适合自己语言的 SDK 使用示例。

高级特性 除了基本的搜索功能，MeiliSearch 还提供了一些高级特性，包括：

自定义排名和过滤规则 同义词支持 多语言支持 分布式部署和负载均衡 详细的使用方法和配置说明请参考官方文档。

总结 MeiliSearch 是一个功能强大且易于使用的全文搜索引擎，适用于各种应用场景。通过本文档，您可以了解到如何安装、配置和使用 MeiliSearch，并了解一些高级特性。希望本文档对您有所帮助！