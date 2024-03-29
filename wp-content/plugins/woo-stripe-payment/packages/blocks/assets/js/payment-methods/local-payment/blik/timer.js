import {useState, useEffect} from '@wordpress/element';

export const Timer = ({onTimeout, i18n}) => {
    const [count, setCount] = useState(60);
    useEffect(() => {
        let count = 60;
        const id = setInterval(() => {
            if (count === 0) {
                onTimeout();
                return clearInterval(id);
            }
            count -= 1;
            setCount(count);
        }, 1000);
        return () => clearInterval(id);
    }, [onTimeout])

    return (
        <div className='wc-stripe-blik-timer-container'>
            <div>
                <p>{i18n.timer_msg}&nbsp;</p>
                <div className={'wc-stripe-blik-timer'}>
                    <span className={'timer'}>{count}s</span>
                </div>
            </div>
        </div>
    )
}

export default Timer;