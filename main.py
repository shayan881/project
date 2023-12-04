from asyncio import sleep, run

async def funcRun():
    await sleep(1)
    print('hello world')

run(funcRun())
print('hello world')