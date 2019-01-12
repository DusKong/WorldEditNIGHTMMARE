# WorldEditNIGHTMMARE

## 設定ファイルの仕様

### ❝ 選択ツール ❞

IDを記入してください。ID以外は絶対に入れないでください  

### ❝ OP以外も使えるようにする ❞

OP以外のプレイヤーがこのプラグインを使えるかどうかを決めます。  
**false**にするとOP以外は使えなくなります  
**true**にするとOP以外も使えるようになります  
++※ただし使えるのはクリエイティブモードのプレイヤーのみ++

## コマンドの仕様 

### ブロックIDの入力

IDは単体で入力することができます

例: //set 1  
    //set stone  

複数のIDをランダムで入れたい場合はIDとIDの間に","を入れます

例: //set 1,2  
    //set stone,dirt  

複数のIDを入れるときに確率をつけたい場合はIDの前に%表示で確率を入れます  

例: //set 20%1,80%2  
    //set 20%stone,80%dirt  

### 方角、方向の入力

方角は以下のように入力することができます  

0:W(西) 1:N(北) 2:E(東) 3:S(南)
4:D(下) 5:U(上)

例: //move 5 W (西に5移動)  
    //move 3 1 (北に3移動)  
    //move 4 D (下に4移動)  

また、方向を入力しない場合はプレーヤーが向いている方向になります

### フラグの入力

コマンドに最後にフラグを付けることでフラグの効果を受けます  
また、二つ以上を同時に使用する場合は-の後に続けて入力します  

例: //paste -a  
    //paste -ao  


## コマンド

### //pos1
範囲指定をするときに使用します  
範囲の始点を選択できます  

### //pos2
範囲指定をするときに使用します  
範囲の終点を選択できます  

### //set [ブロックパターン]
選択範囲内を指定したブロックで埋めます  

例: //set 1  

### //replace [ブロック1] <ブロックパターン2>
選択範囲内のブロック1をブロックパターン2に置き換えます  

例: //replace 1 2  
    //replace 1 2,3  

### //copy [-e]
選択範囲内をクリップボードにコピーします  
フラグ: -e をつけるとエンティティーもコピーしますドにコピーします  

### //cut [-e]
選択範囲内をクリップボードにカットします  
フラグ: -e をつけるとエンティティーもコピーしますドにコピーします  

### //paste [-aos]
クリップボードを貼り付けします  
フラグ: -a をつけると空気ブロックを無視します  
        -o をつけるとコピーし位置を原点とします  
        -s をつけると貼り付けしたものを範囲として選択します  

### //rotate <Y軸> [<X軸>] [<Z軸>]
クリップボードを回転させます  

### //flip [<方向>]
クリップボードを指定方向にひっくり返します  

### //sphere <ブロックパターン> <半径>[,<半径>,<半径>] [頭上?]
自分の位置に球体を生成します  
半径を三つ指定すると楕円体を生成できます  
[頭上?]のところにtrueを入力すると生成位置を頭上に設定できます  
フラグ: -h をつけると空洞にできます  

### //cylinder <ブロックパターン> <半径>[,<半径>], <高さ>
自分の位置に円柱を生成できます  
半径を二つ指定すると楕円柱を生成できます  
フラグ: -h をつけると空洞にできます  

### //pyramid <ブロックパターン> <サイズ>
自分の位置にピラミッドを生成できます  
フラグ: -h をつけると空洞にできます  

### //hsphere <ブロックパターン> <半径>[,<半径>,<半径>] [頭上?]
自分の位置に空洞の球体を生成します  
半径を三つ指定すると楕円体を生成できます  
[頭上?]のところにtrueを入力すると生成位置を頭上に設定できます  

### //hcylinder <ブロックパターン> <半径>[,<半径>], <高さ>
自分の位置に空洞の円柱を生成できます  
半径を二つ指定すると楕円柱を生成できます  

### //hpyramid <ブロックパターン> <サイズ>
自分の位置に空洞のピラミッドを生成できます  

### //stack [回数] [方向]
選択範囲を指定した方向に積み重ねます  
フラグ: -a をつけると空気ブロックを無視します  
        -s をつけると積み重ねた最後のものを範囲として選択します  

### //move [距離] [方向] [除外]
選択範囲を指定した距離だけ指定した方向に移動させます  
除外を指定するとそのブロックは移動しません  
フラグ: -s をつけると移動した先を範囲として選択します  

### //overlay <ブロックパターン>
選択範囲内のブロックの上にブロックを設置します  

### //undo [回数]
回数分だけ操作を元に戻します  

### //redo [回数]
回数分だけ操作をやり直します  

### //brush <sphere|cylinder|clipboard|smooth|gravity>

//brush sphere  
      //brush sphere <ブロックパターン> [半径]  
      球体を生成します  
      フラグ: -h をつけると空洞にします  

//brush cylinder  
      //brush cylinder <ブロックパターン> [半径] [高さ]  
      円柱を生成します  
      フラグ: -h をつけると空洞にします  

//brush clipboard  
      //brush clipboard  
      クリップボードを貼り付けます  

//brush smooth  
      //brush smooth [サイズ] [回数]  
      地形を回数分滑らかにします  

//brush gravity  
      //brush gravity [半径]  
      重力を発生させます  
      フラグ: -h をつけると高さを無制限にします  

### //mask [フィルター]
ブラシに影響されるブロックを制限します

例: //mask 1  
    //mask stone  
# WorldEditNIGHTMMARE

## 設定ファイルの仕様

### ❝ 選択ツール ❞

IDを記入してください。ID以外は絶対に入れないでください

### ❝ OP以外も使えるようにする ❞

OP以外のプレイヤーがこのプラグインを使えるかどうかを決めます。  
**false**にするとOP以外は使えなくなります  
**true**にするとOP以外も使えるようになります  
++※ただし使えるのはクリエイティブモードのプレイヤーのみ++

## ≫≫コマンドの仕様  ≪≪ 

### ブロックIDの入力

IDは単体で入力することができます

例: //set 1  
    //set stone  

複数のIDをランダムで入れたい場合はIDとIDの間に","を入れます

例: //set 1,2  
    //set stone,dirt  

複数のIDを入れるときに確率をつけたい場合はIDの前に%表示で確率を入れます  

例: //set 20%1,80%2  
    //set 20%stone,80%dirt  

### 方角、方向の入力

方角は以下のように入力することができます  

0:W(西) 1:N(北) 2:E(東) 3:S(南)
4:D(下) 5:U(上)

例: //move 5 W (西に5移動)  
    //move 3 1 (北に3移動)  
    //move 4 D (下に4移動)  

また、方向を入力しない場合はプレーヤーが向いている方向になります

### フラグの入力

コマンドに最後にフラグを付けることでフラグの効果を受けます  
また、二つ以上を同時に使用する場合は-の後に続けて入力します  

例: //paste -a  
    //paste -ao  


## コマンド

### //pos1
範囲指定をするときに使用します  
範囲の始点を選択できます  

### //pos2
範囲指定をするときに使用します  
範囲の終点を選択できます  

### //set [ブロックパターン]
選択範囲内を指定したブロックで埋めます  

例: //set 1  

### //replace [ブロック1] <ブロックパターン2>
選択範囲内のブロック1をブロックパターン2に置き換えます  

例: //replace 1 2  
    //replace 1 2,3  

### //copy [-e]
選択範囲内をクリップボードにコピーします  
フラグ: -e をつけるとエンティティーもコピーしますドにコピーします  

### //cut [-e]
選択範囲内をクリップボードにカットします  
フラグ: -e をつけるとエンティティーもコピーしますドにコピーします  

### //paste [-aos]
クリップボードを貼り付けします  
フラグ: -a をつけると空気ブロックを無視します  
        -o をつけるとコピーし位置を原点とします  
        -s をつけると貼り付けしたものを範囲として選択します  

### //rotate <Y軸> [<X軸>] [<Z軸>]
クリップボードを回転させます  

### //flip [<方向>]
クリップボードを指定方向にひっくり返します  

### //sphere <ブロックパターン> <半径>[,<半径>,<半径>] [頭上?]
自分の位置に球体を生成します  
半径を三つ指定すると楕円体を生成できます  
[頭上?]のところにtrueを入力すると生成位置を頭上に設定できます  
フラグ: -h をつけると空洞にできます  

### //cylinder <ブロックパターン> <半径>[,<半径>], <高さ>
自分の位置に円柱を生成できます  
半径を二つ指定すると楕円柱を生成できます  
フラグ: -h をつけると空洞にできます  

### //pyramid <ブロックパターン> <サイズ>
自分の位置にピラミッドを生成できます  
フラグ: -h をつけると空洞にできます  

### //hsphere <ブロックパターン> <半径>[,<半径>,<半径>] [頭上?]
自分の位置に空洞の球体を生成します  
半径を三つ指定すると楕円体を生成できます  
[頭上?]のところにtrueを入力すると生成位置を頭上に設定できます  

### //hcylinder <ブロックパターン> <半径>[,<半径>], <高さ>
自分の位置に空洞の円柱を生成できます  
半径を二つ指定すると楕円柱を生成できます  

### //hpyramid <ブロックパターン> <サイズ>
自分の位置に空洞のピラミッドを生成できます  

### //stack [回数] [方向]
選択範囲を指定した方向に積み重ねます  
フラグ: -a をつけると空気ブロックを無視します  
        -s をつけると積み重ねた最後のものを範囲として選択します  

### //move [距離] [方向] [除外]
選択範囲を指定した距離だけ指定した方向に移動させます  
除外を指定するとそのブロックは移動しません  
フラグ: -s をつけると移動した先を範囲として選択します  

### //overlay <ブロックパターン>
選択範囲内のブロックの上にブロックを設置します  

### //undo [回数]
回数分だけ操作を元に戻します  

### //redo [回数]
回数分だけ操作をやり直します  

### //brush <sphere|cylinder|clipboard|smooth|gravity>

//brush sphere  
      //brush sphere <ブロックパターン> [半径]  
      球体を生成します  
      フラグ: -h をつけると空洞にします  

//brush cylinder  
      //brush cylinder <ブロックパターン> [半径] [高さ]  
      円柱を生成します  
      フラグ: -h をつけると空洞にします  

//brush clipboard  
      //brush clipboard  
      クリップボードを貼り付けます  

//brush smooth  
      //brush smooth [サイズ] [回数]  
      地形を回数分滑らかにします  

//brush gravity  
      //brush gravity [半径]  
      重力を発生させます  
      フラグ: -h をつけると高さを無制限にします  

### //mask [フィルター]
ブラシに影響されるブロックを制限します

例: //mask 1  
    //mask stone  
