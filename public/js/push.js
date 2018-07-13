Push.Permission.request();
Push.create('こんにちは！', {
　　body: '更新をお知らせします！',
　　icon: 'icon.png',
　　timeout: 8000, // 通知が消えるタイミング
　　vibrate: [100, 100, 100], // モバイル端末でのバイブレーション秒数
　　onClick: function() {
　　　　// 通知がクリックされた場合の設定
　　　　console.log(this);
　　}
});