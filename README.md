Test with streaming connection
==============================

Setup:
- Build the image `make build`
- Deploy the stack `docker stack deploy -c docker-compose.yml t`
- Start a streaming connection `curl http://localhost/?stream=1`
- Force update `docker service update t_webimage --force`
- Observe apache process enters graceful shutdown, new container starts
- Observe streaming connection halts, even though old version of apache is still running
- After a TCP timeout old version of apache finally shuts down
