<?php
declare(strict_types=1);

namespace App\Constant;

/**
 * WebSocket 消息事件枚举
 *
 * @package App\Constants
 */
class TalkEventConstant
{
    /**
     * 对话消息通知 - 事件名
     */
    const EVENT_TALK = 'event_talk';

    /**
     * 键盘输入事件通知 - 事件名
     */
    const EVENT_KEYBOARD = 'event_keyboard';

    /**
     * 用户在线状态通知 - 事件名
     */
    const EVENT_ONLINE_STATUS = 'event_online_status';

    /**
     * 聊天消息撤销通知 - 事件名
     */
    const EVENT_REVOKE_TALK = 'event_revoke_talk';

    /**
     * 好友申请消息通知 - 事件名
     */
    const EVENT_FRIEND_APPLY = 'event_friend_apply';

    /**
     * @return array
     */
    public static function getMap(): array
    {
        return [
            self::EVENT_TALK          => '对话消息通知',
            self::EVENT_KEYBOARD      => '键盘输入事件通知',
            self::EVENT_ONLINE_STATUS => '用户在线状态通知',
            self::EVENT_REVOKE_TALK   => '聊天消息撤销通知',
            self::EVENT_FRIEND_APPLY  => '好友申请消息通知'
        ];
    }
}
