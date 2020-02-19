|<center>テーブル論理名</center>|<center>テーブル物理名</center>|<center>作成者</center>|<center>作成日</center>|<center>更新者</center>|<center>更新日</center>|
|:-|:-|-|-|-|-|
|質問情報|questions|柳川 拓也|2020/2/19|||
    

|<center>項番</center>|<center>PK</center>|<center>UK</center>|<center>カラム論理名</center>|<center>カラム物理名</center>|<center>データ型</center>|<center>桁</center>|<center>Not Null</center>|<center>default</center>|<center>備考</center>|
|:-:|:-:|:-:|-|-|-|-|:-:|-|-|
|1 |○ |○ | 質問ID|id|INT(unsigned int)|10|○||auto_increment|
|2 |   | |ユーザーID|user_id|INT|11|○||
|3 |   | |タグカテゴリーID|tag_category_id|INT|11|○|||
|4 |   ||質問のタイトル|title|VARCHAR|30|○|||
|5 |   | |質問の内容|content|VARCHAR|250|○|||
|6 |   | |作成日時|created_at|TIMESTAMP||||
|7 |  | |更新日時|updated_at|TIMESTAMP||||
|8 |  | |削除日時|deleted_at|TIMESTAMP||||



|<center>テーブル論理名</center>|<center>テーブル物理名</center>|<center>作成者</center>|<center>作成日</center>|<center>更新者</center>|<center>更新日</center>|
|:-|:-|-|-|-|-|
|質問情報|comments|柳川 拓也|2020/2/19|||

|<center>項番</center>|<center>PK</center>|<center>UK</center>|<center>カラム論理名</center>|<center>カラム物理名</center>|<center>データ型</center>|<center>桁</center>|<center>Not Null</center>|<center>default</center>|<center>備考</center>|
|:-:|:-:|:-:|-|-|-|-|:-:|-|-|
|1 |○ |○ | コメントID|id|INT(unsigned int)|10|○||auto_increment|
|2 |   ||ユーザーID|user_id|INT|11|○||
|3 |   ||質問ID|question_id|INT|11|○|||
|4 |   ||コメント|comment|VARCHAR|250|○|||
|5 |   | |作成日時|created_at|TIMESTAMP||||
|6 |  | |更新日時|updated_at|TIMESTAMP||||
|7 |  | |削除日時|deleted_at|TIMESTAMP||||


