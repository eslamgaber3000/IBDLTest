<style>
    section {
        position: relative;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 0 20px;
        color: white;
        overflow: hidden;

        &::before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            background: rgba(0, 0, 0, .5);
            z-index: -1;
        }
    }

    h1 {
        font-size: 3.7em;
        margin: 0 0 0.3em;
        color: snow;
    }

    p {
        font-size: 1.3em;
        margin: 0 0 1.6em;
        color: snow;
        width: 50%;
    }

    button {
        padding: 15px 36px;
        border: 2px solid white;
        background: transparent;
        font-size: 1.05em;
        color: inherit;
        cursor: pointer;
        transition: background .3s ease-in-out;
    }

    button:hover {
        background: rgba(255, 255, 255, 0.3);
    }

    .video-background {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        max-width: auto;
        object-fit: cover;
        width: 100%;
        height: 100%;
        margin: 0;
        z-index: -2;
    }
</style>
