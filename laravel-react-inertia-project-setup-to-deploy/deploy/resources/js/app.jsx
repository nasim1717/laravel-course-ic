import {createInertiaApp, router} from '@inertiajs/react'
import { createRoot } from 'react-dom/client'
import NProgress from 'nprogress'

router.on('start',  () => NProgress.start())
router.on('finish', () => NProgress.done())

createInertiaApp({
    progress:{
        delay:200,
        color:"#008000",
        weight:10,
        includeCSS:true,
        showSpinner:true
    },
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.jsx', { eager: true })
        return pages[`./Pages/${name}.jsx`]
    },
    setup({ el, App, props }) {
        createRoot(el).render(<App {...props} />)
    },
})
